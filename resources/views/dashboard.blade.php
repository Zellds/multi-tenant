<x-app-layout>

    <form method="post" action="{{ route('updateTenant') }}" id="updateTenantForm">
        @csrf
        <label for="tenant_id">Selecione uma empresa:</label>
        <select name="tenant_id">
            @foreach ($tenants as $tenant)
                <option value="{{ $tenant->id }}">{{ $tenant->name }}</option>
            @endforeach
        </select>
        <button type="submit">Entrar</button>
    </form>

</x-app-layout>
