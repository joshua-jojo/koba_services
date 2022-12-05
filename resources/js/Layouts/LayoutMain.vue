<template lang="">
    <div class="min-h-screen overflow-hidden relative">
        <div class="absolute z-10 right-0 p-2">
            <transition-group class="stack" name="notif" tag="div">
                <div
                    class="alert shadow-lg"
                    :class="{
                        'alert-success': item.tipe == 'success',
                        'alert-warning': item.tipe == 'warning',
                        'alert-error': item.tipe == 'error',
                    }"
                    v-for="item in $store.state.notifikasi_master"
                    :key="item"
                >
                    <div>
                        <i
                            class="fa fa-check"
                            v-if="item.tipe == 'success'"
                        ></i>
                        <i
                            class="fa-solid fa-triangle-exclamation"
                            v-else-if="item.tipe == 'warning'"
                        ></i>
                        <i
                            class="fa-solid fa-xmark"
                            v-else-if="item.tipe == 'error'"
                        ></i>
                        <span
                            class="capitalize"
                            v-html="`<b>${item.tipe}! </b> ${item.pesan}.`"
                        ></span>
                    </div>
                </div>
            </transition-group>
        </div>
        <div class="drawer drawer-mobile">
            <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content flex flex-col">
                <!-- Page content here -->
                <div
                    class="h-[4rem] flex justify-between px-2 shadow-md items-center"
                >
                    <input
                        type="checkbox"
                        class="sr-only peer hidden"
                        id="sidebar_peer"
                        v-model="sidebar"
                    />
                    <label
                        for="sidebar_peer"
                        class="btn btn-ghost lg:flex hidden"
                        ><i class="fa-solid fa-bars"></i
                    ></label>
                    <label
                        for="my-drawer-2"
                        class="btn btn-ghost drawer-button lg:hidden"
                        ><i class="fa-solid fa-bars"></i
                    ></label>
                    <Link
                        :href="route('logout')"
                        method="post"
                        class="btn btn-sm gap-2 transition-all duration-300 ease-in-out hover:w-max"
                        ><i class="fa-solid fa-right-from-bracket"></i>
                        Logout</Link
                    >
                </div>
                <div class="p-5">
                    <slot></slot>
                </div>
            </div>
            <div
                class="drawer-side scrollbar-hide shadow-[6px_0px_10px_0px_#00000024]"
            >
                <label for="my-drawer-2" class="drawer-overlay"></label>
                <ul
                    class="menu relative transition-all ease-in-out px-4 bg-base-200 text-base-content scrollbar-hide"
                    :class="{
                        'w-[5rem]': sidebar == true,
                        'w-[16rem]': sidebar == false,
                    }"
                >
                    <!-- Sidebar content here -->
                    <Menu :sidebar="sidebar" :user_aktif="user_aktif"></Menu>
                </ul>
            </div>
        </div>
    </div>
</template>
<script>
import Menu from "@/Components/menu.vue";
export default {
    props: {
        user_aktif: Object,
    },
    data() {
        return {
            sidebar: false,
        };
    },
    components: {
        Menu,
    },
    created() {
        this.$store.commit("notifikasi", {
            tipe: "success",
            pesan: `Selamat Datang ${this.user_aktif.nama}`,
        });
    },
};
</script>
<style>
.notif-enter-from,
.notif-leave-to {
    transform: translateX(200%);
}
.notif-enter-to,
.notif-leave-from {
    transform: translateX(0%);
}
.notif-enter-active {
    animation: slide-right 0.7s ease-in-out;
}
.notif-leave-active {
    animation: slide-right 0.7s ease-in-out reverse;
}
@keyframes slide-right {
    0% {
        transform: translateX(200%);
    }
    100% {
        transform: translateX(0%);
    }
}
</style>
