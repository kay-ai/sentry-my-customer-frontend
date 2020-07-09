<li>
    <a href="{{ route('customer.index') }}">
        <i class='uil uil-chat-bubble-user'></i>
        <span> Customers </span>
    </a>
</li>

<li>
    <a href="{{ route('transaction.index') }}">
        <i data-feather="credit-card"></i>
        <span> Transactions </span>
    </a>
</li>

<li>
    <a href="{{ route('store.index') }}">
        <i class="uil uil-shop"></i>
        <span>Stores</span>
    </a>
</li>

<li>
    <a href="{{route('analytics')}}">
        <i data-feather="book-open"></i>
        <span> Analytics </span>
    </a>
</li>

<li>
    <a href="#">
        <i data-feather="bell"></i>
        <span> Debt Reminders </span>
    </a>
</li>

<li>
    <a href="{{ route('assistants.index') }}">
        <i data-feather="users"></i>
        <span> Assistants </span>
    </a>
</li>

<li>
    <a href="{{ route('broadcast.index') }}">
        <i data-feather="message-square"></i>
        <span> Broadcast Message </span>
    </a>
</li>
<li>
    <a href="{{ route('complaint.create') }}">
        <i data-feather="book-open"></i>
        <span> Complaint Forms </span>
    </a>
</li>
<li>
    <a href="{{ route('complaint.index') }}">
        <i data-feather="book"></i>
        <span> Complaint Log </span>
    </a>
</li>
<li>
    <a href="{{ route('setting') }}">
        <i class="uil  uil-cog"></i>
        <span> Settings </span>
    </a>
</li>


<li>
    <a href="{{ route('notification') }}">
        <i data-feather="bell"></i>
        <span> Notifications </span>
    </a>
</li>

{{--todo: Remove this. it is for super admin only--}}
{{-- <li>
    <a href="{{ route('users.index') }}">
        <i data-feather="users"></i>
        <span> Users </span>
    </a>
</li> --}}