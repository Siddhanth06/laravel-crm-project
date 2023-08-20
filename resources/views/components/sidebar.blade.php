<div class="sidebar">
    <header>
        {{-- <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=580&q=80" alt=""> --}}
        <img src="https://siddhanth-portfolio.netlify.app/siddhant.png" alt="">
        <h3>Siddhanth</h3>
    </header>

<div class="menu-items">
    <div class="item">
        <a href="{{route('dashboard')}}">
            <i class="fa-solid fa-house" style="color: #ffffff;"></i>
            Dashboard
        </a>
    </div>
    <div class="item">
        <a href="">
            <i class="fa-solid fa-house" style="color: #ffffff;"></i>
             Leads <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>
        </a>
        <div class="sub-menu">
            <div><a href="{{route('add_lead')}}">Add Lead</a></div>
            <div><a href="{{route('manage_leads')}}">Manage Leads</a></div>
        </div>
    </div>
    <div class="item">
        <a href="">
            <i class="fa-solid fa-house" style="color: #ffffff;"></i>
             Deals <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>
        </a>
        <div class="sub-menu">
            {{-- <div><a href="{{route('add_lead')}}">Add Lead</a></div> --}}
            <div><a href="{{route('manage_deals')}}">Manage deals</a></div>
        </div>
    </div>
    <div class="item">
        <a href="">
            <i class="fa-solid fa-house" style="color: #ffffff;"></i>
             Contacts <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>
        </a>
        <div class="sub-menu">
            {{-- <div><a href="{{route('add_lead')}}">Add Lead</a></div> --}}
            <div><a href="{{route('manage_contacts')}}">Manage Contacts</a></div>
        </div>
    </div>
    <div class="item">
        <a href="">
            <i class="fa-solid fa-house" style="color: #ffffff;"></i>
             Accounts <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>
        </a>
        <div class="sub-menu">
            <div><a href="{{route('add_account')}}">Add Account</a></div>
            <div><a href="{{route('manage_accounts')}}">Manage Accounts</a></div>
        </div>
    </div>
</div>
</div>

{{-- <script>
    $(document).ready(function(){
        $('.fa-arrow-right').click(function(){
            $('.sub-menu').toggleClass("active");
        });
    });
</script> --}}