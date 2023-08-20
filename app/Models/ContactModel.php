<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AccountModel;

class ContactModel extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $primaryKey = 'id';


    public function getAccountDetail()
    {
        return $this->hasOne(AccountModel::class, 'id', 'account_id');
    }
}
