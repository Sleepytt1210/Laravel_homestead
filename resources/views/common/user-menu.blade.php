<div class="card">
    <ul class="list-group list-group-flush text-center">
        <li class="list-group-item {{ $nav == 'info' ? 'bg-primary' : '' }}">
            <a class="{{ $nav == 'info' ? 'text-white' : '' }}" href=" {{ route('user.info') }} ">Personal Details</a>
        </li>
        <li class="list-group-item {{ $nav == 'avatar' ? 'bg-primary' : '' }}">
            <a class="{{ $nav == 'avatar' ? 'text-white' : '' }}" href=" {{ route('user.avatar') }} ">Avatar</a>
        </li>
        <li class="list-group-item {{ $nav == 'blog' ? 'bg-primary' : '' }}">
            <a class="{{ $nav == 'blog' ? 'text-white' : '' }}" href=" {{ route('user.blog') }} ">Blogs</a>
        </li>
    </ul>
</div>