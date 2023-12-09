<form action="{{ route('auth.logout') }}" method="POST" class="mb-3">
    @csrf
    <button type="submit" class="btn btn-danger d-flex align-items-center"><ion-icon class="me-1" name="log-out-outline" size='large'></ion-icon> Log Out</button>
</form>