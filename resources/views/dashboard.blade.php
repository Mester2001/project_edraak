@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100">
    <!-- Main Content -->
    <div class="md:ml-64">
        <!-- Top Navigation -->
        <header class="bg-white shadow">
            <div class="flex justify-between items-center p-4">
                <div class="flex items-center">
                    <h2 class="text-xl font-semibold text-gray-800">لوحة التحكم</h2>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <i class="fas fa-bell text-gray-600 text-xl"></i>
                        <span class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 text-white text-xs rounded-full flex items-center justify-center">3</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=4f46e5&color=fff" alt="User" class="w-8 h-8 rounded-full">
                        <span class="text-gray-700">مرحباً، {{ Auth::user()->name }}</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Dashboard Stats -->
        <main class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <!-- Stat Card 1 -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-indigo-100 text-indigo-600">
                            <i class="fas fa-users text-xl"></i>
                        </div>
                        <div class="mr-4">
                            <p class="text-gray-500 text-sm">إجمالي العملاء</p>
                            <h3 class="text-2xl font-bold">1,234</h3>
                        </div>
                    </div>
                    <div class="mt-4 text-sm text-green-600">
                        <i class="fas fa-arrow-up"></i> 12% عن الشهر الماضي
                    </div>
                </div>

                <!-- Stat Card 2 -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-green-100 text-green-600">
                            <i class="fas fa-shopping-cart text-xl"></i>
                        </div>
                        <div class="mr-4">
                            <p class="text-gray-500 text-sm">إجمالي الطلبات</p>
                            <h3 class="text-2xl font-bold">567</h3>
                        </div>
                    </div>
                    <div class="mt-4 text-sm text-green-600">
                        <i class="fas fa-arrow-up"></i> 8% عن الشهر الماضي
                    </div>
                </div>

                <!-- Stat Card 3 -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                            <i class="fas fa-box text-xl"></i>
                        </div>
                        <div class="mr-4">
                            <p class="text-gray-500 text-sm">المنتجات</p>
                            <h3 class="text-2xl font-bold">89</h3>
                        </div>
                    </div>
                    <div class="mt-4 text-sm text-red-600">
                        <i class="fas fa-arrow-down"></i> 2% عن الشهر الماضي
                    </div>
                </div>

                <!-- Stat Card 4 -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                            <i class="fas fa-dollar-sign text-xl"></i>
                        </div>
                        <div class="mr-4">
                            <p class="text-gray-500 text-sm">الإيرادات</p>
                            <h3 class="text-2xl font-bold">$12,345</h3>
                        </div>
                    </div>
                    <div class="mt-4 text-sm text-green-600">
                        <i class="fas fa-arrow-up"></i> 15% عن الشهر الماضي
                    </div>
                </div>
            </div>

            <!-- Recent Orders -->
            <div class="bg-white rounded-lg shadow p-6 mb-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold">أحدث الطلبات</h3>
                    <a href="#" class="text-indigo-600 hover:text-indigo-800 text-sm">عرض الكل</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                            <tr class="text-right bg-gray-50">
                                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">رقم الطلب</th>
                                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">العميل</th>
                                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">الحالة</th>
                                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">المجموع</th>
                                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">التاريخ</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">#12345</td>
                                <td class="px-6 py-4 whitespace-nowrap">أحمد محمد</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        مكتمل
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">$120.00</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-11-03</td>
                            </tr>
                            <!-- More rows can be added here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>

<!-- Add Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Add some custom styles for RTL -->
<style>
    [dir="rtl"] .ml-3 {
        margin-right: 0.75rem;
        margin-left: 0 !important;
    }
    [dir="rtl"] .mr-4 {
        margin-left: 1rem;
        margin-right: 0 !important;
    }
    body {
        direction: rtl;
        text-align: right;
    }
</style>
@endsection
