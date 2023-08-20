<?php

namespace App\Http\Controllers;

use App\Models\AccountModel;
use App\Models\ContactModel;
use App\Models\DealModel;
use App\Models\LeadModel;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('/home');
        } else {
            return back()->with('status', 'Invalid login details');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function addLead(Request $request)
    {
        $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'title' => ['required'],
            'company' => ['required'],
            'phone' => ['required', 'digits:10'],
            'email' => ['required', 'email'],
        ]);

        $lead = new LeadModel();
        $lead->first_name = $request['first_name'];
        $lead->last_name = $request['last_name'];
        $lead->title = $request['title'];
        $lead->company = $request['company'];
        $lead->phone = $request['phone'];
        $lead->email = $request['email'];
        $lead->lead_source = $request['lead_source'];
        $lead->lead_status = $request['lead_status'];
        $lead->street = $request['street'];
        $lead->city = $request['city'];
        $lead->state = $request['state'];
        $lead->zip_code = $request['zip_code'];
        $lead->country = $request['country'];
        $lead->description = $request['description'];
        $lead->save();

        return redirect('/leads/manage_leads');
    }

    public function manageLeads()
    {
        $leads = LeadModel::all();
        return view('manage_leads', ['leads' => $leads]);
    }

    public function deleteLead($id)
    {
        $lead = LeadModel::find($id);
        $lead->delete();
        return redirect('/leads/manage_leads');
    }

    public function editLead($id)
    {
        $lead = LeadModel::find($id);
        return view('edit_lead', ['lead' => $lead]);
    }

    public function updateLead(Request $request, $id)
    {
        $lead = LeadModel::find($id);
        if (!$lead) {
            return redirect('/leads/manage_leads');
        } else {
            $request->validate([
                'first_name' => ['required'],
                'last_name' => ['required'],
                'title' => ['required'],
                'company' => ['required'],
                'phone' => ['required', 'digits:10'],
                'email' => ['required', 'email'],
            ]);

            $lead->first_name = $request['first_name'];
            $lead->last_name = $request['last_name'];
            $lead->title = $request['title'];
            $lead->company = $request['company'];
            $lead->phone = $request['phone'];
            $lead->email = $request['email'];
            $lead->lead_source = $request['lead_source'];
            $lead->lead_status = $request['lead_status'];
            $lead->street = $request['street'];
            $lead->city = $request['city'];
            $lead->state = $request['state'];
            $lead->zip_code = $request['zip_code'];
            $lead->country = $request['country'];
            $lead->description = $request['description'];
            $lead->save();

            return redirect('/leads/manage_leads');
        }
    }

    public function viewLead($id)
    {
        $lead = LeadModel::find($id);
        return view('view_lead', ['lead' => $lead]);
    }


    public function convertLead($id)
    {
        $lead = LeadModel::find($id);
        return view('convert_lead', ['lead' => $lead]);
    }

    public function convertLeadForm(Request $request, $id)
    {

        $lead = LeadModel::find($id);
        $request->validate([
            'deal_name' => ['required'],
            'closing_date' => ['required'],
            'stage' => ['required'],
        ]);

        //account details
        $account = new AccountModel();
        $account->account_name = $lead['company'];
        $account->phone = $lead['phone'];
        $account->save();
        $account_id = $account->id;

        //contact details
        $contact = new ContactModel();
        $contact->contact_name = $lead['first_name'] . $lead['last_name'];
        $contact->account_id = $account_id;
        $contact->email = $lead['email'];
        $contact->phone = $lead['phone'];
        $contact->save();
        $contact_id = $contact->id;

        //deal details
        $deal = new DealModel();
        $deal->deal_name = $request['deal_name'];
        $deal->account_id = $account_id;
        $deal->contact_id = $contact_id;
        $deal->closing_date = $request['closing_date'];
        $deal->deal_stage = $request['stage'];
        $deal->amount = $request['amount'];
        $deal->save();

        //delete lead
        $lead->delete();

        return redirect('/leads/manage_leads');
    }

    public function manageAccounts()
    {
        $data = AccountModel::all();
        return view('manage_accounts', ['accounts' => $data]);
    }

    public function manageContacts()
    {
        $data = ContactModel::with('getAccountDetail')->get();
        return view('manage_contacts', ['contacts' => $data]);
    }

    public function manageDeals()
    {
        $data = DealModel::with('get_account_detail')->with('get_contact_detail')->get();
        return view('manage_deals', ['deals' => $data]);
    }

    public function addAccount()
    {
        return view('add_account');
    }

    public function addAccountData(Request $request)
    {
        $request->validate([
            'account_name' => ['required'],
            'phone' => ['required', 'digits:10'],
        ]);

        $account = new AccountModel();
        $account->account_name = $request['account_name'];
        $account->phone = $request['phone'];
        $account->website = $request['website'];
        $account->save();
        return redirect('/accounts/manage_accounts');
    }

    public function editAccount(Request $request, $id)
    {
        $account = AccountModel::find($id);
        return view('edit_account', ['account' => $account]);
    }

    public function updateAccount(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'account_name' => ['required'],
            'phone' => ['required', 'digits:10'],
        ]);

        $account = AccountModel::find($id);
        $account->account_name = $request['account_name'];
        $account->phone = $request['phone'];
        $account->website = $request['website'];
        $account->save();
        return redirect('/accounts/manage_accounts');
    }

    public function deleteAccount(Request $request, $id)
    {
        $account = AccountModel::find($id);
        $account->delete();
        return redirect('/accounts/manage_accounts');
    }
}
