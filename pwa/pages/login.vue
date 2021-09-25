<template>
  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 text-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-xl">
      <div class="p-4 bg-white rounded-xl">
        <h2 class="text-2xl font-bold mb-4 w-full">Login to application</h2>
        <div v-if="error" class="w-full bg-red-100 text-red-900 p-4 rounded-md mb-4">
          {{ error }}
        </div>
        <div class="max-w-md">
          <div class="grid grid-cols-1 gap-6">
            <label class="block">
              <span class="text-gray-700">Username or Email</span>
              <input
                v-model="username"
                type="text"
                class="rounded-md mt-1 block w-full border-gray-300 shadow-sm focus:border-indigo-200 focus:ring-opacity-50"
              >
            </label>
            <label class="block">
              <span class="text-gray-700">Password</span>
              <input
                v-model="password"
                type="password"
                class="rounded-md mt-1 block w-full border-gray-300 shadow-sm focus:border-indigo-200 focus:ring-opacity-50"
              >
            </label>
            <div class="block">
              <button @click="login">Login</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</template>
<script>
export default {
  data(){
    return {
      username: null,
      password: null,
      error: null
    }
  },
  methods: {
    async login(){
      try{
        this.error = null;
        await this.$auth.loginWith('local',{
          data: {
            username: this.username,
            password: this.password
          }
        })
        .then(response => {
          this.$router.push('/');
        })
      }catch (error){
        this.error = 'Your username/email or password is invalid';
      }
    }
  }
}
</script>
