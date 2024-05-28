<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 ">
            {{ __('User Details') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 mb-4">
            {{ __("Keep your details updated.") }}
        </p>

        <p><b>User ID: </b>{{     $user->id }}</p>
        <p><b>Name:    </b>{{ $user->name }}</p>
        <p><b>Role:    </b>{{ $user->role }}</p>
        <p><b>Email:   </b>{{ $user->email }}</p>
        <p><b>Account Created At: </b>{{ $user->created_at }}</h2>

        @if ($user->email_verified_at == null)
            <p><b>Email verified status: </b>Unverified</p>
        @else
            <p><b>Email verified status: </b>Verified On
                {{ $user->email_verified_at }}</p>
        @endif
        <b>Account Status: </b>
        <p class="text-success" style="display: inline"><b>Active</b></p>
    </header>

    

    
</section>
