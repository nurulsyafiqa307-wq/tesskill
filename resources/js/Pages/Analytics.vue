<template>
  <div class="min-h-screen bg-gradient-to-br from-slate-50 via-slate-100 to-slate-200 dark:from-slate-950 dark:via-slate-900 dark:to-slate-950 font-sans flex flex-col md:flex-row transition-colors duration-300">
    
    <!-- 1. MOBILE TOP NAVBAR -->
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

    <!-- MOBILE DROPDOWN MENU -->
    <div v-if="mobileMenuOpen" class="md:hidden bg-white/95 dark:bg-slate-800/95 backdrop-blur-lg border-b border-slate-200 dark:border-slate-700 p-4 space-y-2 sticky top-14 z-40 shadow-xl">
      <a href="/inventories" class="block px-4 py-2.5 rounded-xl text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700">Data Inventaris</a>
      <a href="/members" class="block px-4 py-2.5 rounded-xl text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700">Management Anggota</a>
      <a href="/analytics" class="block px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-900 dark:text-white bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-indigo-950/50 dark:to-purple-950/50 border border-indigo-100 dark:border-indigo-800">Analytics</a>
      <button @click="logout" class="w-full text-left px-4 py-2.5 rounded-xl text-sm font-medium text-rose-600 hover:bg-rose-50 dark:hover:bg-rose-900/20">Logout</button>
    </div>

    <!-- 2. DESKTOP SIDEBAR -->
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

          <a href="/members" class="group flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700/50 hover:text-slate-900 dark:hover:text-white transition-all duration-200">
            <div class="w-8 h-8 rounded-xl flex items-center justify-center text-slate-400 dark:text-slate-500 group-hover:text-indigo-500 dark:group-hover:text-indigo-400 group-hover:bg-indigo-50 dark:group-hover:bg-indigo-950/40 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
            </div>
            <span>Management Anggota</span>
          </a>

          <a href="/analytics" class="group flex items-center justify-between px-4 py-3 rounded-2xl text-sm font-semibold text-white bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-500 dark:to-purple-600 shadow-lg shadow-indigo-500/30 dark:shadow-indigo-900/50 transition-all duration-300 hover:shadow-xl hover:shadow-indigo-500/40">
            <div class="flex items-center gap-3">
              <div class="w-8 h-8 rounded-xl bg-white/20 dark:bg-white/10 flex items-center justify-center text-white backdrop-blur-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                </svg>
              </div>
              <span>Analytics</span>
            </div>
            <div class="w-1.5 h-5 bg-white rounded-full shadow-sm"></div>
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

    <!-- MAIN CONTENT -->
    <main class="flex-1 p-4 md:p-8 overflow-y-auto">
      <div class="max-w-7xl mx-auto space-y-6">
        
        <!-- Header Card -->
        <div class="bg-white/80 dark:bg-slate-800/80 backdrop-blur-xl p-6 rounded-2xl shadow-lg shadow-slate-200/50 dark:shadow-black/20 border border-slate-200 dark:border-slate-700/50 transition-all duration-300">
          <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <div>
              <h1 class="text-xl font-bold text-slate-900 dark:text-white tracking-tight">Analytics</h1>
              <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Ringkasan data status inventaris perusahaan secara real-time.</p>
            </div>
            <div class="flex items-center gap-2 text-xs font-medium text-slate-600 dark:text-slate-300 bg-gradient-to-r from-slate-50 to-slate-100 dark:from-slate-700/50 dark:to-slate-700/30 px-3 py-2 rounded-xl border border-slate-200 dark:border-slate-600/50 shadow-sm">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-indigo-500 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
              <span>Total: <span class="font-bold text-indigo-600 dark:text-indigo-400">{{ totalItems }}</span> item</span>
            </div>
          </div>
        </div>

        <!-- 4 Cards Statistik -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
          
          <!-- Card Barang Baik -->
          <div class="bg-white/80 dark:bg-slate-800/80 backdrop-blur-xl p-5 rounded-2xl shadow-lg shadow-slate-200/50 dark:shadow-black/20 border border-slate-200 dark:border-slate-700/50 transition-all duration-300 hover:shadow-xl hover:shadow-emerald-500/10 hover:-translate-y-1 hover:border-emerald-200 dark:hover:border-emerald-800/50">
            <div class="flex justify-between items-start mb-4">
              <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-emerald-50 to-emerald-100 dark:from-emerald-950/50 dark:to-emerald-900/30 flex items-center justify-center text-emerald-600 dark:text-emerald-400 border border-emerald-100 dark:border-emerald-800/50 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <span class="text-xs font-semibold text-emerald-600 dark:text-emerald-400 bg-emerald-50 dark:bg-emerald-950/40 px-2 py-1 rounded-lg border border-emerald-100 dark:border-emerald-800">
                {{ getPercentage(stats.baik) }}%
              </span>
            </div>
            <div class="text-slate-500 dark:text-slate-400 text-sm font-medium">Barang Baik</div>
            <div class="text-3xl font-bold text-slate-800 dark:text-white mt-1">{{ stats.baik }}</div>
          </div>

          <!-- Card Barang Rusak -->
          <div class="bg-white/80 dark:bg-slate-800/80 backdrop-blur-xl p-5 rounded-2xl shadow-lg shadow-slate-200/50 dark:shadow-black/20 border border-slate-200 dark:border-slate-700/50 transition-all duration-300 hover:shadow-xl hover:shadow-rose-500/10 hover:-translate-y-1 hover:border-rose-200 dark:hover:border-rose-800/50">
            <div class="flex justify-between items-start mb-4">
              <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-rose-50 to-rose-100 dark:from-rose-950/50 dark:to-rose-900/30 flex items-center justify-center text-rose-600 dark:text-rose-400 border border-rose-100 dark:border-rose-800/50 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
              </div>
              <span class="text-xs font-semibold text-rose-600 dark:text-rose-400 bg-rose-50 dark:bg-rose-950/40 px-2 py-1 rounded-lg border border-rose-100 dark:border-rose-800">
                {{ getPercentage(stats.rusak) }}%
              </span>
            </div>
            <div class="text-slate-500 dark:text-slate-400 text-sm font-medium">Barang Rusak</div>
            <div class="text-3xl font-bold text-slate-800 dark:text-white mt-1">{{ stats.rusak }}</div>
          </div>

          <!-- Card Dilelang -->
          <div class="bg-white/80 dark:bg-slate-800/80 backdrop-blur-xl p-5 rounded-2xl shadow-lg shadow-slate-200/50 dark:shadow-black/20 border border-slate-200 dark:border-slate-700/50 transition-all duration-300 hover:shadow-xl hover:shadow-amber-500/10 hover:-translate-y-1 hover:border-amber-200 dark:hover:border-amber-800/50">
            <div class="flex justify-between items-start mb-4">
              <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-amber-50 to-amber-100 dark:from-amber-950/50 dark:to-amber-900/30 flex items-center justify-center text-amber-600 dark:text-amber-400 border border-amber-100 dark:border-amber-800/50 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
              </div>
              <span class="text-xs font-semibold text-amber-600 dark:text-amber-400 bg-amber-50 dark:bg-amber-950/40 px-2 py-1 rounded-lg border border-amber-100 dark:border-amber-800">
                {{ getPercentage(stats.dilelang) }}%
              </span>
            </div>
            <div class="text-slate-500 dark:text-slate-400 text-sm font-medium">Dilelang</div>
            <div class="text-3xl font-bold text-slate-800 dark:text-white mt-1">{{ stats.dilelang }}</div>
          </div>

          <!-- Card Tidak Dipakai -->
          <div class="bg-white/80 dark:bg-slate-800/80 backdrop-blur-xl p-5 rounded-2xl shadow-lg shadow-slate-200/50 dark:shadow-black/20 border border-slate-200 dark:border-slate-700/50 transition-all duration-300 hover:shadow-xl hover:shadow-sky-500/10 hover:-translate-y-1 hover:border-sky-200 dark:hover:border-sky-800/50">
            <div class="flex justify-between items-start mb-4">
              <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-sky-50 to-sky-100 dark:from-sky-950/50 dark:to-sky-900/30 flex items-center justify-center text-sky-600 dark:text-sky-400 border border-sky-100 dark:border-sky-800/50 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/></svg>
              </div>
              <span class="text-xs font-semibold text-sky-600 dark:text-sky-400 bg-sky-50 dark:bg-sky-950/40 px-2 py-1 rounded-lg border border-sky-100 dark:border-sky-800">
                {{ getPercentage(stats.tidak_dipakai) }}%
              </span>
            </div>
            <div class="text-slate-500 dark:text-slate-400 text-sm font-medium">Tidak Dipakai</div>
            <div class="text-3xl font-bold text-slate-800 dark:text-white mt-1">{{ stats.tidak_dipakai }}</div>
          </div>

        </div>

        <!-- Grafik Card -->
        <div class="bg-white/80 dark:bg-slate-800/80 backdrop-blur-xl p-6 rounded-2xl shadow-lg shadow-slate-200/50 dark:shadow-black/20 border border-slate-200 dark:border-slate-700/50 transition-all duration-300">
          <div class="flex items-center justify-between mb-6">
            <div>
              <h3 class="text-base font-bold text-slate-800 dark:text-white">Grafik Status Inventaris</h3>
              <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Distribusi jumlah barang per kategori status</p>
            </div>
            <div class="flex items-center gap-2 text-xs text-slate-500 dark:text-slate-400 bg-slate-50 dark:bg-slate-700/50 px-3 py-1.5 rounded-lg border border-slate-200 dark:border-slate-600/50">
              <span class="w-2 h-2 rounded-full bg-gradient-to-r from-indigo-500 to-purple-500"></span> Status
            </div>
          </div>

          <!-- Chart Container -->
          <div class="overflow-hidden">
           <!-- Chart Area -->
        <div class="relative h-72 flex">
          <!-- Y-axis Labels -->
          <div class="flex flex-col justify-between text-xs text-slate-400 dark:text-slate-500 pr-3 select-none font-medium text-right w-8">
            <span>{{ maxChartValue }}</span>
            <span>{{ Math.round(maxChartValue * 0.8) }}</span>
            <span>{{ Math.round(maxChartValue * 0.6) }}</span>
            <span>{{ Math.round(maxChartValue * 0.4) }}</span>
            <span>{{ Math.round(maxChartValue * 0.2) }}</span>
            <span>0</span>
          </div>

          <!-- Plot Area -->
          <div class="relative flex-1 flex flex-col">
            <!-- Gridlines -->
            <div class="absolute inset-0 flex flex-col justify-between pointer-events-none">
              <div class="border-t border-dashed border-slate-200/70 dark:border-slate-700/50 w-full"></div>
              <div class="border-t border-dashed border-slate-200/70 dark:border-slate-700/50 w-full"></div>
              <div class="border-t border-dashed border-slate-200/70 dark:border-slate-700/50 w-full"></div>
              <div class="border-t border-dashed border-slate-200/70 dark:border-slate-700/50 w-full"></div>
              <div class="border-t border-dashed border-slate-200/70 dark:border-slate-700/50 w-full"></div>
              <div class="border-t-2 border-slate-300 dark:border-slate-600 w-full"></div>
            </div>

            <!-- Bars -->
            <div class="relative flex-1 flex items-end justify-around px-2 z-10 gap-3">
              <div v-for="(bar, index) in chartBars" :key="index" class="flex flex-col items-center h-full justify-end flex-1 max-w-[120px]">
                <span class="text-sm font-bold mb-1" :class="bar.textColor">{{ bar.value }}</span>
                <div 
                  class="w-full max-w-[60px] rounded-t-xl transition-all duration-500 shadow-md hover:opacity-90 hover:shadow-lg cursor-pointer"
                  :class="bar.bgColor"
                  :style="{ height: getBarHeight(bar.value) }"
                ></div>
              </div>
            </div>
          </div>
        </div>
            <!-- X-axis Labels (separate row below chart, tanpa border-top) -->
            <div class="flex justify-around px-2 pt-3 mt-1 ml-10 gap-3">
              <div v-for="(bar, index) in chartBars" :key="index" class="flex-1 max-w-[120px] text-center">
                <span class="text-xs font-medium text-slate-600 dark:text-slate-300 whitespace-nowrap">{{ bar.label }}</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </main>

  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      isDarkMode: false,
      mobileMenuOpen: false,
      user: {},
      stats: {
        baik: 0,
        rusak: 0,
        dilelang: 0,
        tidak_dipakai: 0
      }
    };
  },
  computed: {
    totalItems() {
      return this.stats.baik + this.stats.rusak + this.stats.dilelang + this.stats.tidak_dipakai;
    },
    maxChartValue() {
      const max = Math.max(this.stats.baik, this.stats.rusak, this.stats.dilelang, this.stats.tidak_dipakai, 5);
      return Math.ceil((max + 1) / 10) * 10;
    },
    chartBars() {
      return [
        { label: 'Barang Baik', value: this.stats.baik, bgColor: 'bg-gradient-to-t from-emerald-600 to-emerald-400', textColor: 'text-emerald-600 dark:text-emerald-400' },
        { label: 'Barang Rusak', value: this.stats.rusak, bgColor: 'bg-gradient-to-t from-rose-600 to-rose-400', textColor: 'text-rose-600 dark:text-rose-400' },
        { label: 'Dilelang', value: this.stats.dilelang, bgColor: 'bg-gradient-to-t from-amber-600 to-amber-400', textColor: 'text-amber-600 dark:text-amber-400' },
        { label: 'Tidak Dipakai', value: this.stats.tidak_dipakai, bgColor: 'bg-gradient-to-t from-sky-600 to-sky-400', textColor: 'text-sky-600 dark:text-sky-400' }
      ];
    },
    userInitial() {
      if (!this.user.name) return '?';
      return this.user.name.charAt(0).toUpperCase();
    }
  },
  mounted() {
    this.fetchUser();
    this.fetchAnalytics();

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
        .then(response => { this.user = response.data; })
        .catch(error => { console.error("Gagal memuat data user:", error); });
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
    fetchAnalytics() {
      axios.get('/api/inventories')
        .then(response => {
          const items = response.data.data || response.data;
          let baik = 0, rusak = 0, dilelang = 0, tidak_dipakai = 0;

          items.forEach(item => {
            const status = (item.status || '').toLowerCase();
            if (status === 'baik') baik++;
            else if (status === 'rusak') rusak++;
            else if (status === 'dilelang') dilelang++;
            else if (status === 'tidak dipakai' || status === 'tidak_dipakai') tidak_dipakai++;
          });

          this.stats = { baik, rusak, dilelang, tidak_dipakai };
        })
        .catch(error => { console.error("Gagal memuat data analytics:", error); });
    },
    getBarHeight(value) {
      if (value === 0) return '4px';
      const percentage = (value / this.maxChartValue) * 100;
      return Math.max(percentage, 3) + '%';
    },
    getPercentage(value) {
      if (this.totalItems === 0) return 0;
      return Math.round((value / this.totalItems) * 100);
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