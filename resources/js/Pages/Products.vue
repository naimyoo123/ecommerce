<script setup>
import { ref, onMounted } from 'vue'
const products = ref([])
onMounted(async () => {
  const res = await fetch('/api/products')
  products.value = await res.json()
})
</script>

<template>
  <div class="grid grid-cols-3 gap-4 p-6">
    <div v-for="p in products" :key="p.id" class="p-4 bg-white shadow rounded">
      <img :src="p.image" class="h-40 w-full object-cover rounded" />
      <h2 class="text-lg font-semibold mt-2">{{ p.name }}</h2>
      <p class="text-gray-600">{{ p.price }} $</p>
    </div>
  </div>
</template>
