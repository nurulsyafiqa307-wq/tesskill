<template>
  <div
    class="min-h-screen bg-gradient-to-br from-slate-100 via-slate-50 to-indigo-50/40 dark:from-slate-950 dark:via-slate-900 dark:to-slate-950 font-sans flex items-center justify-center p-4 transition-colors duration-300"
  >
    <div
      class="max-w-md w-full bg-white dark:bg-slate-800/90 backdrop-blur-sm rounded-3xl shadow-xl shadow-slate-200/60 dark:shadow-black/30 border border-slate-200/60 dark:border-slate-700/50 p-8 md:p-10 transition-all duration-300"
    >
     
          <div class="flex items-center justify-center mb-8">
            <img
                :src="'/images/logo.png'"
                alt="Logo Botika"
                class="w-20 h-20 rounded-full object-contain"
            />
            </div>


      <h2
        class="text-[26px] leading-tight font-bold text-slate-900 dark:text-white tracking-tight mb-2 text-center"
      >
        Masuk ke Akun
      </h2>

      <p
        class="text-sm text-slate-500 dark:text-slate-400 mb-8 leading-relaxed text-center"
      >
        Silakan masukkan email dan password internal perusahaan.
      </p>

      <form @submit.prevent="handleLogin" class="space-y-5">
        <div>
          <label
            for="email"
            class="block text-[11px] font-semibold text-slate-600 dark:text-slate-400 uppercase tracking-[0.08em] mb-2"
          >
            Email
          </label>

          <input
            id="email"
            v-model="form.email"
            type="email"
            required
            autocomplete="username"
            placeholder="tiara@botika.online"
            class="w-full px-4 py-3 bg-slate-50/80 dark:bg-slate-700/50 border border-slate-200 dark:border-slate-600 rounded-xl text-sm text-slate-800 dark:text-white placeholder-slate-400 focus:outline-none focus:border-indigo-500 dark:focus:border-indigo-400 focus:ring-4 focus:ring-indigo-500/10 dark:focus:ring-indigo-400/10 transition-all duration-200"
          />
        </div>

        <div>
          <label
            for="password"
            class="block text-[11px] font-semibold text-slate-600 dark:text-slate-400 uppercase tracking-[0.08em] mb-2"
          >
            Password
          </label>

          <input
            id="password"
            v-model="form.password"
            type="password"
            required
            autocomplete="current-password"
            placeholder="••••••••"
            class="w-full px-4 py-3 bg-slate-50/80 dark:bg-slate-700/50 border border-slate-200 dark:border-slate-600 rounded-xl text-sm text-slate-800 dark:text-white placeholder-slate-400 focus:outline-none focus:border-indigo-500 dark:focus:border-indigo-400 focus:ring-4 focus:ring-indigo-500/10 dark:focus:ring-indigo-400/10 transition-all duration-200"
          />
        </div>

        <button
          type="submit"
          class="w-full py-3.5 bg-gradient-to-r from-slate-900 to-slate-800 hover:from-slate-800 hover:to-slate-700 dark:from-indigo-600 dark:to-indigo-700 dark:hover:from-indigo-500 dark:hover:to-indigo-600 text-white rounded-xl text-sm font-semibold shadow-lg shadow-slate-900/20 dark:shadow-indigo-900/30 hover:shadow-xl transition-all duration-200 cursor-pointer mt-4 active:scale-[0.98]"
        >
          Masuk
        </button>
      </form>
      <div
        class="mt-8 text-center text-xs text-slate-400 dark:text-slate-500 font-medium"
      >
        Akses khusus internal manajemen perusahaan.
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import Swal from 'sweetalert2';

export default {
  data() {
    return {
      form: {
        email: '',
        password: ''
      }
    };
  },

  methods: {
    handleLogin() {
      axios.post('/api/login', this.form)
        .then(response => {
          localStorage.setItem('token', response.data.token);

          Swal.fire({
            icon: 'success',
            title: 'Berhasil Masuk!',
            timer: 1200,
            showConfirmButton: false
          }).then(() => {
            window.location.href = '/inventories';
          });
        })
        .catch(error => {
          Swal.fire({
            icon: 'error',
            title: 'Gagal Masuk',
            text: error.response?.data?.message || 'Email atau password salah.'
          });
        });
    }
  }
};
</script>
