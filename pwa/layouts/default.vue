<template>
  <div class="relative min-h-screen md:flex">
    <!-- mobile menu bar -->
    <!-- sidebar -->
    <div class="bg-blue-800 text-blue-100 w-64 space-y-6 py-7 px-2">
      <!-- nav brand -->
      <NuxtLink to="/" class="text-white flex items-center space-x-2">
        <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-8 w-8"
        viewBox="0 0 20 20"
        fill="currentColor"
      >
        <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd" />
      </svg>
        <span class="text-2xl font-extrabold">DoyoLabs</span>
      </NuxtLink>
      <nav>
        <NuxtLink
          to="/"
          class="block py-2.5 px-4 space-x-2 flex items-center rounded transition duration-200 hover:bg-blue-700 hover:text-white"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          <span>Dashboard</span>
        </NuxtLink>
        <NuxtLink
          to="/user/profile"
          class="block py-2.5 px-4 space-x-2 flex items-center rounded transition duration-200 hover:bg-blue-700 hover:text-white"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
          </svg>
          <span>Profile</span>
        </NuxtLink>
      </nav>
    </div>
    <div class="flex-1 p-8 text-2xl font-bold bg-gray-200">
      <Nuxt/>
    </div>
  </div>
</template>
<script>
import Header from "~/components/ui/Header";
import Sidebar from "~/components/ui/Sidebar";
export default {
  components: { Sidebar, Header}
}
</script>
