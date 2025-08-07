 <!-- Sidebar Navigation -->
 <aside class="w-full md:w-64 bg-white shadow-lg p-6 flex flex-col">
     <div class="text-2xl font-bold text-gray-800 mb-8"> Community Based Service Provider System </div>
     <nav>
         <ul class="space-y-2">
             <li>
                 <a href="{{ route('admin.dashboard') }}" class="flex items-center p-3 rounded-lg hover:bg-gray-100 text-gray-600 transition-colors duration-200">
                     Dashboard
                 </a>
             </li>
             <li>
                 <a href="/admin/providers" class="flex items-center p-3 rounded-lg hover:bg-gray-100 text-gray-600 transition-colors duration-200">
                     Service Provider
                 </a>
             </li>
             <li>
                 <a href="{{ route('admin.users') }}" class="flex items-center p-3 rounded-lg hover:bg-gray-100 text-gray-600 transition-colors duration-200">
                     Users
                 </a>
             </li>
         </ul>
     </nav>
     <!-- Spacer to push 'Logout' and 'Back to Site' to the bottom on larger screens -->
     <div class="mt-auto">
         <nav>
             <ul class="space-y-2">
                 <li>
                     <a href="/" class="flex items-center p-3 rounded-lg hover:bg-gray-100 text-gray-600 transition-colors duration-200">
                         Back to Site
                     </a>
                 </li>
                 <li>
                    <form action="/logout" method="post" class="flex items-center p-3 rounded-lg hover:bg-gray-100 text-gray-600 transition-colors duration-200">
                        @csrf

                         <button type="submit">Logout</button>
                     </form>
                 </li>
             </ul>
         </nav>
     </div>
 </aside>