@extends('Admin.home')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Main Content -->
    <div class="relative md:pr-64">
        <!-- Top Navigation -->
        <header class="bg-white shadow-sm">
            <div class="flex justify-between items-center p-4 border-b border-gray-100">
                <div class="flex items-center">
                    <button id="sidebarToggle" class="text-gray-500 hover:text-gray-700 focus:outline-none ml-4">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <h2 class="text-xl font-semibold text-gray-800">{{ __('messages.dashboard') }}</h2>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
                            <i class="fas fa-bell text-xl"></i>
                            <span class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 text-white text-xs rounded-full flex items-center justify-center">3</span>
                        </button>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-700">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-500">{{ __('messages.admin') }}</p>
                        </div>
                        <div class="relative">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=4f46e5&color=fff" 
                                 alt="User" class="w-10 h-10 rounded-full border-2 border-white shadow">
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Dashboard Stats -->
        <main class="p-4 md:p-6">
            <!-- Welcome Banner -->
            <div class="bg-gradient-to-r from-indigo-600 to-blue-600 rounded-xl text-white p-6 mb-6 shadow-lg">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                    <div class="mb-4 md:mb-0">
                        <h1 class="text-2xl md:text-3xl font-bold mb-2">{{ __('messages.welcome_back') }}, {{ Auth::user()->name }}!</h1>
                        <p class="text-indigo-100">{{ __('messages.dashboard_overview') }}</p>
                    </div>
                    <button class="bg-white text-indigo-600 hover:bg-indigo-50 px-4 py-2 rounded-lg font-medium transition duration-200">
                        <i class="fas fa-plus ml-2"></i> {{ __('messages.new_order') }}
                    </button>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                <!-- Total Orders -->
                <div class="bg-white rounded-xl shadow-sm p-5 border border-gray-100 hover:shadow-md transition duration-200">
                    <div class="flex items-center justify-between">
                        <div class="p-3 rounded-lg bg-blue-50 text-blue-600">
                            <i class="fas fa-shopping-cart text-xl"></i>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-gray-500">{{ __('messages.total_orders') }}</p>
                            <h3 class="text-2xl font-bold">1,234</h3>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-xs px-2 py-1 bg-green-100 text-green-800 rounded-full">
                            <i class="fas fa-arrow-up text-xs"></i> 12% {{ __('messages.from_last_month') }}
                        </span>
                        <a href="#" class="text-xs text-blue-600 hover:underline">{{ __('messages.view_all') }}</a>
                    </div>
                </div>

                <!-- Total Revenue -->
                <div class="bg-white rounded-xl shadow-sm p-5 border border-gray-100 hover:shadow-md transition duration-200">
                    <div class="flex items-center justify-between">
                        <div class="p-3 rounded-lg bg-green-50 text-green-600">
                            <i class="fas fa-dollar-sign text-xl"></i>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-gray-500">{{ __('messages.total_revenue') }}</p>
                            <h3 class="text-2xl font-bold">$12,345</h3>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-xs px-2 py-1 bg-green-100 text-green-800 rounded-full">
                            <i class="fas fa-arrow-up text-xs"></i> 15% {{ __('messages.from_last_month') }}
                        </span>
                        <a href="#" class="text-xs text-blue-600 hover:underline">{{ __('messages.view_report') }}</a>
                    </div>
                </div>

                <!-- Total Products -->
                <div class="bg-white rounded-xl shadow-sm p-5 border border-gray-100 hover:shadow-md transition duration-200">
                    <div class="flex items-center justify-between">
                        <div class="p-3 rounded-lg bg-purple-50 text-purple-600">
                            <i class="fas fa-box text-xl"></i>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-gray-500">{{ __('messages.total_products') }}</p>
                            <h3 class="text-2xl font-bold">89</h3>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-xs px-2 py-1 bg-red-100 text-red-800 rounded-full">
                            <i class="fas fa-arrow-down text-xs"></i> 2% {{ __('messages.from_last_month') }}
                        </span>
                        <a href="{{ route('categories.index') }}" class="text-xs text-blue-600 hover:underline">{{ __('messages.manage_products') }}</a>
                    </div>
                </div>

                <!-- Total Customers -->
                <div class="bg-white rounded-xl shadow-sm p-5 border border-gray-100 hover:shadow-md transition duration-200">
                    <div class="flex items-center justify-between">
                        <div class="p-3 rounded-lg bg-orange-50 text-orange-600">
                            <i class="fas fa-users text-xl"></i>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-gray-500">{{ __('messages.total_customers') }}</p>
                            <h3 class="text-2xl font-bold">1,234</h3>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-xs px-2 py-1 bg-green-100 text-green-800 rounded-full">
                            <i class="fas fa-arrow-up text-xs"></i> 8% {{ __('messages.from_last_month') }}
                        </span>
                        <a href="#" class="text-xs text-blue-600 hover:underline">{{ __('messages.view_all') }}</a>
                    </div>
                </div>
            </div>

            <!-- Recent Orders & Stats -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Recent Orders -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-semibold">{{ __('messages.recent_orders') }}</h3>
                            <a href="#" class="text-sm text-blue-600 hover:underline">{{ __('messages.view_all') }}</a>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('messages.order_id') }}</th>
                                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('messages.customer') }}</th>
                                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('messages.status') }}</th>
                                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('messages.amount') }}</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @for($i = 1; $i <= 5; $i++)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#{{ 1000 + $i }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="https://i.pravatar.cc/150?img={{ $i }}" alt="">
                                                </div>
                                                <div class="mr-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ __('messages.customer_name_' . $i) }}</div>
                                                    <div class="text-sm text-gray-500">{{ __('messages.order_type_' . $i % 3) }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @php
                                                $statuses = ['completed', 'processing', 'pending'];
                                                $status = $statuses[array_rand($statuses)];
                                                $statusColors = [
                                                    'completed' => 'bg-green-100 text-green-800',
                                                    'processing' => 'bg-blue-100 text-blue-800',
                                                    'pending' => 'bg-yellow-100 text-yellow-800'
                                                ];
                                            @endphp
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusColors[$status] }}">
                                                {{ __("messages.status_$status") }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            ${{ rand(50, 500) }}.00
                                        </td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Quick Stats -->
                <div>
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 mb-6">
                        <h3 class="text-lg font-semibold mb-4">{{ __('messages.sales_overview') }}</h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-600">{{ __('messages.this_month') }}</span>
                                    <span class="text-sm font-semibold">$8,540</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 65%"></div>
                                </div>
                                <div class="flex justify-between mt-1">
                                    <span class="text-xs text-gray-500">+12% {{ __('messages.from_last_month') }}</span>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-600">{{ __('messages.this_week') }}</span>
                                    <span class="text-sm font-semibold">$2,340</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 48%"></div>
                                </div>
                                <div class="flex justify-between mt-1">
                                    <span class="text-xs text-gray-500">+8% {{ __('messages.from_last_week') }}</span>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-600">{{ __('messages.today') }}</span>
                                    <span class="text-sm font-semibold">$1,230</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-yellow-500 h-2 rounded-full" style="width: 35%"></div>
                                </div>
                                <div class="flex justify-between mt-1">
                                    <span class="text-xs text-gray-500">+5% {{ __('messages.from_yesterday') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <h3 class="text-lg font-semibold mb-4">{{ __('messages.quick_actions') }}</h3>
                        <div class="grid grid-cols-2 gap-3">
                            <a href="#" class="flex flex-col items-center justify-center p-4 bg-indigo-50 rounded-lg text-center hover:bg-indigo-100 transition duration-200">
                                <div class="p-3 bg-indigo-100 rounded-full text-indigo-600 mb-2">
                                    <i class="fas fa-plus text-lg"></i>
                                </div>
                                <span class="text-sm font-medium text-gray-700">{{ __('messages.new_order') }}</span>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center p-4 bg-green-50 rounded-lg text-center hover:bg-green-100 transition duration-200">
                                <div class="p-3 bg-green-100 rounded-full text-green-600 mb-2">
                                    <i class="fas fa-user-plus text-lg"></i>
                                </div>
                                <span class="text-sm font-medium text-gray-700">{{ __('messages.add_customer') }}</span>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center p-4 bg-purple-50 rounded-lg text-center hover:bg-purple-100 transition duration-200">
                                <div class="p-3 bg-purple-100 rounded-full text-purple-600 mb-2">
                                    <i class="fas fa-box text-lg"></i>
                                </div>
                                <span class="text-sm font-medium text-gray-700">{{ __('messages.add_product') }}</span>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center p-4 bg-yellow-50 rounded-lg text-center hover:bg-yellow-100 transition duration-200">
                                <div class="p-3 bg-yellow-100 rounded-full text-yellow-600 mb-2">
                                    <i class="fas fa-chart-line text-lg"></i>
                                </div>
                                <span class="text-sm font-medium text-gray-700">{{ __('messages.reports') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<!-- Toggle Sidebar Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');
        
        if (sidebarToggle && sidebar) {
            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.toggle('-translate-x-full');
                sidebar.classList.toggle('md:translate-x-0');
            });
        }
    });
</script>

<style>
    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }
    
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    
    ::-webkit-scrollbar-thumb {
        background: #c7d2fe;
        border-radius: 10px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: #a5b4fc;
    }
    
    /* Smooth transitions */
    .transition-all {
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
    }
    
    /* RTL Support */
    [dir="rtl"] .rtl\:mr-2 {
        margin-right: 0.5rem;
    }
    
    [dir="rtl"] .rtl\:ml-2 {
        margin-left: 0.5rem;
    }
    
    /* Hover effects */
    .hover\:translate-y-1:hover {
        --tw-translate-y: -0.25rem;
        transform: translateY(var(--tw-translate-y));
    }
</style>
@endsection
