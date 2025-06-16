<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Dashboard</h1>
            </div>

            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

                <!-- Filter button -->
                <x-dropdown-filter align="right" />

                <!-- Datepicker built with flatpickr -->
                <x-datepicker />

                <!-- Add view button -->
                <button class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white">
                    <svg class="fill-current shrink-0 xs:hidden" width="16" height="16" viewBox="0 0 16 16">
                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                  <span class="max-xs:sr-only">Add View</span>
                </button>
                
            </div>

        </div>
        <div class="grid grid-cols-3 gap-4 mb-4">
            <x-toggle label="Notifikasi" :initial="true" />
            <x-input-form id="default" label="Default" />
            <x-input-form id="tooltip" label="With Tooltip" tooltip="Ini tooltip info" />

            <x-input-form id="mandatory" label="Mandatory" required />

            <x-input-form id="prefix" label="With Prefix" prefix="USD" />

            <x-input-form id="suffix" label="With Suffix" suffix="%" />

            <x-input-form id="placeholder" label="With Placeholder" placeholder="Something cool..." />

            <x-input-form id="icon" label="With Icon" 
            {{-- :icon="view('components.icons.edit')"  --}}
            />

            <x-input-form id="support" label="With Support Text" supportText="Supporting text goes here!" />

            <x-input-form id="search" label="Search" type="search" 
            {{-- :icon="view('components.icons.search')"  --}}
            />

            <x-input-form id="small" label="Small" size="small" class="text-sm" />
            <x-input-form id="default" label="Default" size="default" />
            <x-input-form id="large" label="Large" size="large" class="text-lg" />

            <x-input-form id="disabled" label="Disabled" placeholder="Disabled..." disabled />
            <x-input-form id="error" label="Error" state="error" />
            <x-input-form id="success" label="Success" state="success" />

            <x-select
                name="hewan_qurban"
                label="Hewan Qurban"
                :options="['sapi' => 'Sapi', 'kambing' => 'Kambing']"
                wireModel="hewan_qurban"
                required
            />

            <x-button type="submit">Simpan</x-button>

            <div class="flex flex-wrap items-center gap-4">
                <x-vbutton variant="primary">Primary</x-button>
                <x-vbutton variant="secondary">Secondary</x-button>
                <x-vbutton variant="tertiary">Tertiary</x-button>
                <x-vbutton variant="danger">Danger</x-button>
                <x-vbutton variant="danger-outline">Danger</x-button>
                <x-vbutton variant="success">Success</x-button>
                <x-vbutton variant="success-outline">Success</x-button>
            </div>
            <div>
                <x-vbutton variant="danger" disabled>Nonaktif</x-button>
                <x-vbutton variant="success" loading>Proses...</x-button>
            </div>
            {{-- <x-form.checkbox name="minta_bagian" label="Minta Bagian Daging" wireModel="minta_bagian" /> --}}

        </div>
        <div class="grid grid-cols-1 gap-4 mb-4">
            <x-alerts.caution message="Kami sedang mengalami lonjakan permintaan." />
            <x-alerts.success message="Kami sedang mengalami lonjakan permintaan." />
            <x-alerts.danger message="Kami sedang mengalami lonjakan permintaan." />
            <x-alerts.info message="Kami sedang mengalami lonjakan permintaan." />
        </div>

        <div class="grid grid-cols-1 gap-4 mb-4">
            @livewire('show-modal')
            <x-modal-success title="Success modal" message="ini isi modal. pakai alpine.js" />
            <p>Modal dengan pure alpine.js . custom slot untuk isi. feedback cancel dan yes</p>
            <x-modal-feedback title="Delete Data">
                <div class="flex space-x-3">
                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-red-100 text-red-600">
                        ❌
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Delete Data</h3>
                        <p class="mt-1 text-sm text-gray-600">Are you sure you want to delete this item? This action cannot be undone.</p>
                    </div>
                </div>
            </x-modal-feedback>

            <x-modal-feedback title="Subscribe Newsletter">
                <div class="flex space-x-3">
                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 text-blue-600">
                        <svg class="text-violet-500 fill-current" width="16" height="16" viewBox="0 0 16 16">
                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm1 12H7V7h2v5zM8 6c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Subscribe Newsletter</h3>
                        <p class="mt-1 text-sm text-gray-600">Stay up to date with our latest news by subscribing to our newsletter.</p>
                    </div>
                </div>
            </x-modal-feedback>
        </div>

        <div class="flex flex-wrap gap-2 mb-4">
            <x-badge type="violet" label="Working on" />
            <x-badge type="primary" label="Exciting news" />
            <x-badge type="product" label="Product" />
            <x-badge type="announcement" label="Announcement" />
            <x-badge type="bug" label="Bug Fix" />
            <x-badge type="customer" label="Customer Stories" />
            <x-badge type="gray" label="All Stories" />
            <x-badge label="Default" />
        </div>

        <div class="ml-10 mb-4">
            <x-tooltip position="top" label="Tooltip">
                <div class="text-sm text-gray-700 dark:text-gray-300">
                    This is a tooltip example. You can use it to provide additional information about an element.
                </div>
            </x-tooltip>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">

            <!-- Line chart (Acme Plus) -->
            <x-dashboard.dashboard-card-01 :dataFeed="$dataFeed" />

            <!-- Line chart (Acme Advanced) -->
            <x-dashboard.dashboard-card-02 :dataFeed="$dataFeed" />

            <!-- Line chart (Acme Professional) -->
            <x-dashboard.dashboard-card-03 :dataFeed="$dataFeed" />

            <!-- Bar chart (Direct vs Indirect) -->
            <x-dashboard.dashboard-card-04 />

            <!-- Line chart (Real Time Value) -->
            <x-dashboard.dashboard-card-05 />

            <!-- Doughnut chart (Top Countries) -->
            <x-dashboard.dashboard-card-06 />

            <!-- Table (Top Channels) -->
            <x-dashboard.dashboard-card-07 />

            <!-- Line chart (Sales Over Time) -->
            <x-dashboard.dashboard-card-08 />

            <!-- Stacked bar chart (Sales VS Refunds) -->
            <x-dashboard.dashboard-card-09 />

            <!-- Card (Customers) -->
            <x-dashboard.dashboard-card-10 />

            <!-- Card (Reasons for Refunds) -->
            <x-dashboard.dashboard-card-11 />             

            <!-- Card (Recent Activity) -->
            <x-dashboard.dashboard-card-12 />
            
            <!-- Card (Income/Expenses) -->
            <x-dashboard.dashboard-card-13 />

        </div>

    </div>
</x-app-layout>
