<template lang="">
    <button
        class="btn select-none"
        @click="
            $store.commit('notifikasi', {
                tipe: 'success',
                pesan: 'Data Telah Sukses',
            })
        "
    >
        Sukses
    </button>
    <button
        class="btn select-none"
        @click="
            $store.commit('notifikasi', {
                tipe: 'warning',
                pesan: 'Data Berbahaya',
            })
        "
    >
        warning
    </button>
    <button
        class="btn select-none"
        @click="$store.commit('notifikasi', { tipe: 'error', pesan: 'error' })"
    >
        error
    </button>
</template>
<script>
import LayoutMain from "@/Layouts/LayoutMain.vue";
export default {
    layout: LayoutMain,
    beforeMount() {},
};
</script>
<style lang=""></style>
