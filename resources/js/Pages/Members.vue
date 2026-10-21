<template>
  <div class="min-h-screen bg-gradient-to-br from-slate-50 via-slate-100 to-slate-200 dark:from-slate-950 dark:via-slate-900 dark:to-slate-950 font-sans flex flex-col md:flex-row transition-colors duration-300">
    
    <div class="md:hidden bg-white/80 dark:bg-slate-800/80 backdrop-blur-lg border-b border-slate-200 dark:border-slate-700 px-4 py-3 flex items-center justify-between sticky top-0 z-50">
      <div class="flex items-center gap-2">
        <img :src="'/images/logo.png'" alt="Logo" class="w-8 h-8 rounded-full object-cover ring-2 ring-white dark:ring-slate-700 shadow-md" />
        <h1 class="text-sm font-bold text-slate-900 dark:text-white tracking-tight">inventaris.</h1>
      </div>
      <button @click="mobileMenuOpen = !mobileMenuOpen" class="p-2 rounded-xl bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-200 hover:bg-slate-200 dark:hover:bg-slate-600 focus:outline-none transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path v-if="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <div v-if="mobileMenuOpen" class="md:hidden bg-white/95 dark:bg-slate-800/95 backdrop-blur-lg border-b border-slate-200 dark:border-slate-700 p-4 space-y-2 sticky top-14 z-40 shadow-xl">
      <a href="/inventories" class="block px-4 py-2.5 rounded-xl text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700">Data Inventaris</a>
      <a href="/members" class="block px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-900 dark:text-white bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-indigo-950/50 dark:to-purple-950/50 border border-indigo-100 dark:border-indigo-800">Management Anggota</a>
      <a href="/analytics" class="block px-4 py-2.5 rounded-xl text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700">Analytics</a>
      <button @click="logout" class="w-full text-left px-4 py-2.5 rounded-xl text-sm font-medium text-rose-600 hover:bg-rose-50 dark:hover:bg-rose-900/20">Logout</button>
    </div>

    <aside class="w-72 bg-white/90 dark:bg-slate-800/90 backdrop-blur-xl border-r border-slate-200 dark:border-slate-700/50 flex-col justify-between hidden md:flex sticky top-0 h-screen transition-colors duration-300 shadow-xl">
      <div>
        <div class="p-6 border-b border-slate-100 dark:border-slate-700/50 flex items-center gap-3 bg-gradient-to-r from-slate-50 to-transparent dark:from-slate-700/30">
          <img :src="'/images/logo.png'" alt="Logo" class="w-10 h-10 rounded-full object-cover ring-2 ring-white dark:ring-slate-600 shadow-lg" />
          <div>
            <h2 class="text-xs font-semibold text-slate-400 leading-none uppercase tracking-wider">managemen</h2>
            <h1 class="text-base font-bold text-slate-900 dark:text-white tracking-tight">inventaris.</h1>
          </div>
        </div>

        <div class="p-4 space-y-1">
          <a href="/inventories" class="group flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700/50 hover:text-slate-900 dark:hover:text-white transition-all duration-200">
            <div class="w-8 h-8 rounded-xl flex items-center justify-center text-slate-400 dark:text-slate-500 group-hover:text-indigo-500 dark:group-hover:text-indigo-400 group-hover:bg-indigo-50 dark:group-hover:bg-indigo-950/40 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
              </svg>
            </div>
            <span>Data Inventaris</span>
          </a>

          <a href="/members" class="group flex items-center justify-between px-4 py-3 rounded-2xl text-sm font-semibold text-white bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-500 dark:to-purple-600 shadow-lg shadow-indigo-500/30 dark:shadow-indigo-900/50 transition-all duration-300 hover:shadow-xl hover:shadow-indigo-500/40">
            <div class="flex items-center gap-3">
              <div class="w-8 h-8 rounded-xl bg-white/20 dark:bg-white/10 flex items-center justify-center text-white backdrop-blur-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
              </div>
              <span>Management Anggota</span>
            </div>
            <div class="w-1.5 h-5 bg-white rounded-full shadow-sm"></div>
          </a>

          <a href="/analytics" class="group flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700/50 hover:text-slate-900 dark:hover:text-white transition-all duration-200">
            <div class="w-8 h-8 rounded-xl flex items-center justify-center text-slate-400 dark:text-slate-500 group-hover:text-indigo-500 dark:group-hover:text-indigo-400 group-hover:bg-indigo-50 dark:group-hover:bg-indigo-950/40 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
              </svg>
            </div>
            <span>Analytics</span>
          </a>
        </div>
      </div>

      <div class="p-4 border-t border-slate-100 dark:border-slate-700/50">
        <div class="bg-gradient-to-br from-slate-50 to-slate-100 dark:from-slate-700/50 dark:to-slate-800 p-4 rounded-2xl border border-slate-200/80 dark:border-slate-600/50 shadow-sm space-y-3">
          <div class="flex items-center gap-3">
            <div class="relative">
              <div class="w-10 h-10 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-base font-bold text-white overflow-hidden ring-2 ring-white dark:ring-slate-700 shadow-md select-none">
                {{ userInitial }}
              </div>
              <div class="absolute -bottom-0.5 -right-0.5 w-3 h-3 bg-emerald-500 rounded-full border-2 border-white dark:border-slate-800"></div>
            </div>
            <div class="overflow-hidden">
              <h4 class="font-bold text-slate-800 dark:text-white text-xs truncate">{{ user.name || 'Memuat...' }}</h4>
              <p class="text-[11px] text-slate-500 dark:text-slate-400 truncate">{{ user.email || 'Memuat...' }}</p>
            </div>
          </div>

          <div class="flex items-center justify-between pt-2 border-t border-slate-200/80 dark:border-slate-600/50 text-xs text-slate-700 dark:text-slate-300 font-medium">
            <div class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-600 dark:text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
              </svg>
              <span>Dark Theme</span>
            </div>
            <label class="relative inline-flex items-center cursor-pointer p-1">
              <input type="checkbox" v-model="isDarkMode" @change="toggleDarkMode" class="sr-only peer">
              <div class="w-9 h-5 bg-slate-300 dark:bg-slate-600 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[6px] after:left-[6px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-gradient-to-r peer-checked:from-indigo-500 peer-checked:to-purple-600"></div>
            </label>
          </div>

          <button @click="logout" class="flex items-center gap-2 text-xs font-medium text-slate-700 dark:text-slate-300 hover:text-rose-600 dark:hover:text-rose-400 transition-colors w-full cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
            <span>Logout</span>
          </button>
        </div>
      </div>
    </aside>

    <main class="flex-1 p-4 md:p-8 overflow-y-auto">
      <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-center mb-6 bg-white/80 dark:bg-slate-800/80 backdrop-blur-xl px-6 py-5 rounded-2xl shadow-lg shadow-slate-200/50 dark:shadow-black/20 border border-slate-200 dark:border-slate-700/50 gap-4 transition-all duration-300">
          <div>
            <h1 class="text-xl font-bold text-slate-900 dark:text-white tracking-tight">Management Anggota</h1>
            <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Kelola data anggota dan jabatan di perusahaan</p>
          </div>
          
          <div class="flex items-center gap-3 w-full md:w-auto">
            <div class="relative flex-1 md:w-72">
              <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </span>
              <input v-model="searchQuery" type="text" placeholder="Search Anggota" class="w-full pl-10 pr-10 py-2.5 bg-slate-50 dark:bg-slate-700/50 border border-slate-200 dark:border-slate-600 rounded-full text-sm text-slate-800 dark:text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/30 focus:border-indigo-500 dark:focus:border-indigo-400 transition-all duration-200" />
              <button v-if="searchQuery" type="button" @click="searchQuery = ''" class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-slate-400 hover:text-slate-700 dark:hover:text-slate-200 cursor-pointer z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>

            <button @click="openAddModal" class="bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 dark:from-indigo-500 dark:to-purple-600 text-white px-5 py-2.5 rounded-full font-medium shadow-lg shadow-indigo-500/30 dark:shadow-indigo-900/50 hover:shadow-xl hover:shadow-indigo-500/40 hover:-translate-y-0.5 transition-all duration-200 flex items-center gap-2 cursor-pointer whitespace-nowrap text-sm">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
              </svg>
              <span>Tambah Anggota</span>
            </button>
          </div>
        </div>

        <div class="bg-white/80 dark:bg-slate-800/80 backdrop-blur-xl rounded-2xl shadow-lg shadow-slate-200/50 dark:shadow-black/20 border border-slate-200 dark:border-slate-700/50 overflow-hidden transition-all duration-300">
          <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
              <thead>
                <tr class="bg-gradient-to-r from-slate-50 to-slate-100 dark:from-slate-700/50 dark:to-slate-700/30 border-b border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 text-xs uppercase tracking-wider font-semibold">
                  <th class="py-4 px-6">No</th>
                  <th class="py-4 px-6">Nama Anggota</th>
                  <th class="py-4 px-6">Jabatan</th>
                  <th class="py-4 px-6">Department</th>
                  <th class="py-4 px-6 text-center">Action</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-slate-100 dark:divide-slate-700/50 text-slate-700 dark:text-slate-300 text-sm">
                <template v-if="paginatedMembers.length > 0">
                  <tr v-for="(member, index) in paginatedMembers" :key="member.id" class="hover:bg-gradient-to-r hover:from-indigo-50/50 hover:to-transparent dark:hover:from-indigo-950/20 dark:hover:to-transparent transition-all duration-150">
                    <td class="py-4 px-6 font-medium text-slate-400">{{ (currentPage - 1) * perPage + index + 1 }}</td>
                    <td class="py-4 px-6 font-semibold text-slate-800 dark:text-white">{{ member.nama }}</td>
                    <td class="py-4 px-6">
                      <span class="bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-indigo-950/50 dark:to-purple-950/50 text-indigo-700 dark:text-indigo-400 px-3 py-1 rounded-full text-xs font-medium border border-indigo-100 dark:border-indigo-800/50 shadow-sm whitespace-nowrap">
                        {{ member.jabatan }}
                      </span>
                    </td>
                    <td class="py-4 px-6 text-slate-600 dark:text-slate-300">{{ member.department }}</td>
                    <td class="py-4 px-6 text-center space-x-2 whitespace-nowrap">
                      <button @click="openEditModal(member)" class="text-amber-600 dark:text-amber-400 hover:text-amber-800 font-medium text-xs bg-amber-50 dark:bg-amber-950/50 hover:bg-amber-100 dark:hover:bg-amber-900/50 px-3 py-1.5 rounded-lg transition-all duration-200 cursor-pointer hover:shadow-md hover:shadow-amber-500/20">
                        Edit
                      </button>
                      <button @click="deleteMember(member.id)" class="text-rose-500 dark:text-rose-400 hover:text-rose-700 font-medium text-xs bg-rose-50 dark:bg-rose-950/50 hover:bg-rose-100 dark:hover:bg-rose-900/50 px-3 py-1.5 rounded-lg transition-all duration-200 cursor-pointer hover:shadow-md hover:shadow-rose-500/20">
                        Hapus
                      </button>
                    </td>
                  </tr>
                </template>
                <template v-else>
                  <tr>
                    <td colspan="5" class="py-12 text-center text-slate-400 italic">
                      Tidak ada data anggota yang ditemukan.
                    </td>
                  </tr>
                </template>
              </tbody>
            </table>
          </div>

          <div class="px-6 py-4 bg-white/50 dark:bg-slate-800/50 border-t border-slate-200 dark:border-slate-700/50 flex flex-col sm:flex-row items-center justify-between gap-4 text-sm text-slate-600 dark:text-slate-300 transition-colors duration-200">
            <div class="flex items-center gap-2">
              <span>Showing</span>
              <select v-model.number="perPage" @change="currentPage = 1" class="px-3 py-1.5 bg-slate-50 dark:bg-slate-700 border border-slate-200 dark:border-slate-600 rounded-xl text-sm text-slate-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500/30 focus:border-indigo-500 font-medium cursor-pointer">
                <option :value="5">5</option>
                <option :value="10">10</option>
                <option :value="25">25</option>
                <option :value="50">50</option>
              </select>
              <span>items per page</span>
            </div>

            <div class="flex items-center gap-1">
              <button @click="changePage(currentPage - 1)" :disabled="currentPage === 1" class="px-3 py-1.5 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 disabled:opacity-40 disabled:cursor-not-allowed font-medium transition-colors">
                Previous
              </button>
              
              <template v-for="page in totalPages" :key="page">
                <button @click="currentPage = page" :class="currentPage === page ? 'bg-gradient-to-r from-indigo-500 to-purple-600 dark:from-indigo-400 dark:to-purple-500 text-white border border-indigo-300 dark:border-indigo-500 font-bold shadow-md shadow-indigo-500/30' : 'hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-600 dark:text-slate-300'" class="w-9 h-9 rounded-xl flex items-center justify-center text-sm transition-all cursor-pointer">
                  {{ page }}
                </button>
              </template>

              <button @click="changePage(currentPage + 1)" :disabled="currentPage === totalPages || totalPages === 0" class="px-3 py-1.5 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 disabled:opacity-40 disabled:cursor-not-allowed font-medium transition-colors">
                Next
              </button>
            </div>
          </div>
        </div>

      </div>
    </main>

    <div v-if="showModal" class="fixed inset-0 bg-slate-900/60 dark:bg-black/70 backdrop-blur-sm flex items-center justify-center z-50 p-4">
      <div class="bg-white dark:bg-slate-800 rounded-2xl max-w-md w-full p-6 shadow-2xl border border-slate-200 dark:border-slate-700/50 transition-all duration-300 animate-[scaleIn_0.2s_ease-out]">
        <h3 class="text-lg font-bold text-slate-800 dark:text-white mb-1">
          {{ isEditMode ? 'Edit Data Anggota' : 'Tambah Anggota Baru' }}
        </h3>
        <p class="text-xs text-slate-500 dark:text-slate-400 mb-4">Lengkapi form di bawah ini dengan teliti</p>
        
        <form @submit.prevent="saveMember" class="space-y-4">
          <div>
            <label class="block text-xs font-semibold text-slate-600 dark:text-slate-400 uppercase mb-1.5 tracking-wider">Nama Anggota</label>
            <input v-model="form.nama" type="text" required placeholder="Contoh: Budi Santoso" class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-700/50 border border-slate-200 dark:border-slate-600 rounded-xl text-sm text-slate-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500/30 focus:border-indigo-500 transition-all" />
          </div>
          <div>
            <label class="block text-xs font-semibold text-slate-600 dark:text-slate-400 uppercase mb-1.5 tracking-wider">Jabatan</label>
            <input v-model="form.jabatan" type="text" required placeholder="Contoh: Frontend Developer" class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-700/50 border border-slate-200 dark:border-slate-600 rounded-xl text-sm text-slate-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500/30 focus:border-indigo-500 transition-all" />
          </div>
          <div>
            <label class="block text-xs font-semibold text-slate-600 dark:text-slate-400 uppercase mb-1.5 tracking-wider">Department</label>
            <input v-model="form.department" type="text" required placeholder="Contoh: Technology" class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-700/50 border border-slate-200 dark:border-slate-600 rounded-xl text-sm text-slate-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500/30 focus:border-indigo-500 transition-all" />
          </div>

          <div class="flex justify-end gap-3 mt-6 pt-4 border-t border-slate-100 dark:border-slate-700">
            <button type="button" @click="showModal = false" class="px-5 py-2.5 rounded-xl text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700 cursor-pointer transition-colors">
              Batal
            </button>
            <button type="submit" class="px-5 py-2.5 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white rounded-xl text-sm font-medium shadow-lg shadow-indigo-500/30 hover:shadow-xl hover:shadow-indigo-500/40 hover:-translate-y-0.5 transition-all cursor-pointer">
              {{ isEditMode ? 'Simpan Perubahan' : 'Simpan Data' }}
            </button>
          </div>
        </form>
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
      members: [],
      user: {},
      searchQuery: '',
      perPage: 5,
      currentPage: 1,
      showModal: false,
      isEditMode: false,
      isDarkMode: false,
      mobileMenuOpen: false,
      formId: null,
      form: {
        nama: '',
        jabatan: '',
        department: ''
      }
    };
  },
  computed: {
    filteredMembers() {
      if (!this.searchQuery) return this.members;
      const query = this.searchQuery.toLowerCase();
      return this.members.filter(m => 
        m.nama.toLowerCase().includes(query) || 
        m.jabatan.toLowerCase().includes(query) || 
        m.department.toLowerCase().includes(query)
      );
    },
    totalPages() {
      return Math.ceil(this.filteredMembers.length / this.perPage) || 1;
    },
    paginatedMembers() {
      const start = (this.currentPage - 1) * this.perPage;
      const end = start + this.perPage;
      return this.filteredMembers.slice(start, end);
    },
    userInitial() {
      if (!this.user.name) return '?';
      return this.user.name.charAt(0).toUpperCase();
    }
  },
  watch: {
    searchQuery() {
      this.currentPage = 1;
    }
  },
  mounted() {
    this.fetchUser();
    this.fetchMembers();

    if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      this.isDarkMode = true;
      document.documentElement.classList.add('dark');
    } else {
      this.isDarkMode = false;
      document.documentElement.classList.remove('dark');
    }
  },
  methods: {
    fetchUser() {
      axios.get('/api/user')
        .then(response => {
          this.user = response.data;
        })
        .catch(error => {
          console.error("Gagal memuat data user:", error);
        });
    },
    toggleDarkMode() {
      if (this.isDarkMode) {
        document.documentElement.classList.add('dark');
        localStorage.setItem('theme', 'dark');
      } else {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('theme', 'light');
      }
    },
    fetchMembers() {
      axios.get('/api/members')
        .then(response => {
          this.members = response.data.data || response.data;
        })
        .catch(error => {
          console.error("Gagal memuat data anggota:", error);
        });
    },
    changePage(page) {
      if (page >= 1 && page <= this.totalPages) {
        this.currentPage = page;
      }
    },
    openAddModal() {
      this.isEditMode = false;
      this.formId = null;
      this.form = {
        nama: '',
        jabatan: '',
        department: ''
      };
      this.showModal = true;
    },
    openEditModal(member) {
      this.isEditMode = true;
      this.formId = member.id;
      this.form = { ...member };
      this.showModal = true;
    },
    saveMember() {
      const swalTheme = this.isDarkMode ? 'dark' : 'light';

      if (this.isEditMode) {
        axios.put(`/api/members/${this.formId}`, this.form)
          .then(() => {
            this.showModal = false;
            this.fetchMembers();
            Swal.fire({
              icon: 'success',
              title: 'Berhasil!',
              text: 'Data anggota berhasil diubah.',
              timer: 1500,
              showConfirmButton: false,
              theme: swalTheme
            });
          })
          .catch(error => {
            const errorMsg = error.response?.data?.message || JSON.stringify(error.response?.data?.errors) || error.message;
            Swal.fire({
              icon: 'error',
              title: 'Gagal Update',
              text: errorMsg,
              theme: swalTheme
            });
          });
      } else {
        axios.post('/api/members', this.form)
          .then(() => {
            this.showModal = false;
            this.fetchMembers();
            Swal.fire({
              icon: 'success',
              title: 'Berhasil!',
              text: 'Data anggota berhasil disimpan.',
              timer: 1500,
              showConfirmButton: false,
              theme: swalTheme
            });
          })
          .catch(error => {
            const errorMsg = error.response?.data?.message || JSON.stringify(error.response?.data?.errors) || error.message;
            Swal.fire({
              icon: 'error',
              title: 'Gagal Menyimpan',
              text: errorMsg,
              theme: swalTheme
            });
          });
      }
    },
    deleteMember(id) {
      const swalTheme = this.isDarkMode ? 'dark' : 'light';

      Swal.fire({
        title: 'Yakin ingin menghapus?',
        text: "Data anggota yang dihapus tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#4f46e5',
        cancelButtonColor: '#ef4444',
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal',
        theme: swalTheme
      }).then((result) => {
        if (result.isConfirmed) {
          axios.delete(`/api/members/${id}`)
            .then(() => {
              this.fetchMembers();
              Swal.fire({
                icon: 'success',
                title: 'Terhapus!',
                text: 'Data anggota berhasil dihapus.',
                timer: 1500,
                showConfirmButton: false,
                theme: swalTheme
              });
            })
            .catch(error => {
              Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Gagal menghapus data anggota.',
                theme: swalTheme
              });
            });
        }
      });
    },
    logout() {
      localStorage.removeItem('token');
      window.location.href = '/login';
    }
  }
};
</script>

<style>
@keyframes scaleIn {
  from {
    opacity: 0;
    transform: scale(0.95) translateY(10px);
  }
  to {
    opacity: 1;
    transform: scale(1) translateY(0);
  }
}

/* Smooth scrollbar */
::-webkit-scrollbar {
  width: 8px;
  height: 8px;
}
::-webkit-scrollbar-track {
  background: transparent;
}
::-webkit-scrollbar-thumb {
  background: rgba(148, 163, 184, 0.4);
  border-radius: 4px;
}
::-webkit-scrollbar-thumb:hover {
  background: rgba(148, 163, 184, 0.6);
}
</style>