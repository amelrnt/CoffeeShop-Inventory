<x-maz-sidebar :href="route('dashboard')" :logo="asset('images/logo/logo.png')">

    <x-maz-sidebar-item name="Dashboard" :link="route('dashboard')" icon="bi bi-grid-fill"></x-maz-sidebar-item>

    <x-maz-sidebar-item name="Data Manipulation" icon="bi bi-stack">
        <!-- TODO: Add auth for user (owner) with access -->
        <x-maz-sidebar-sub-item name="Employee" :link="route('employee')"></x-maz-sidebar-sub-item>
        <x-maz-sidebar-sub-item name="Role" :link="route('role')"></x-maz-sidebar-sub-item>
        <x-maz-sidebar-sub-item name="Employee Role" :link="route('components.new')"></x-maz-sidebar-sub-item>
        <!-- TODO: Add auth for user (manager) with access -->
        <x-maz-sidebar-sub-item name="Product" :link="route('products')"></x-maz-sidebar-sub-item>
        <x-maz-sidebar-sub-item name="Supplier" :link="route('supplier')"></x-maz-sidebar-sub-item>
        <x-maz-sidebar-sub-item name="Inventory" :link="route('inventory')"></x-maz-sidebar-sub-item>
        <x-maz-sidebar-sub-item name="Product Material" :link="route('inventory')"></x-maz-sidebar-sub-item>
        <x-maz-sidebar-sub-item name="Transaction" :link="route('transaction')"></x-maz-sidebar-sub-item>
        <x-maz-sidebar-sub-item name="Order" :link="route('components.new')"></x-maz-sidebar-sub-item>

    </x-maz-sidebar-item>
    <x-maz-sidebar-item name="Report" icon="bi bi-stack">
        <x-maz-sidebar-sub-item name="Order" :link="route('components.new')"></x-maz-sidebar-sub-item>
        <x-maz-sidebar-sub-item name="Transaction" :link="route('components.new')"></x-maz-sidebar-sub-item>
        <x-maz-sidebar-sub-item name="Inventory" :link="route('components.new')"></x-maz-sidebar-sub-item>
    </x-maz-sidebar-item>

</x-maz-sidebar>
