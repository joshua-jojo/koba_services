<template lang="">
    <Link :href="route('dashboard')">
        <li
            class="sticky border-b-2 border-base-300 top-0 z-10 py-4 flex justify-center items-center bg-base-200"
            :class="{ hidden: sidebar }"
        >
            <div
                class="text-xl text-center flex flex-col justify-center drop-shadow-lg uppercase font-black break-words w-[12rem]"
            >
                <div class="">
                    <img
                        :src="user_aktif.perusahaan.logo"
                        class="bg-cover max-h-[4rem]"
                    />
                </div>
                <div class="">
                    {{ user_aktif.perusahaan.nama }}
                </div>
            </div>
        </li>
    </Link>
    <li class="flex justify-center w-full gap-2 menu-title my-4">
        <div
            class="w-full h-full gap-2 flex items-center justify-start"
            :class="{ 'justify-center': sidebar }"
        >
            <div
                class="h-full min-w-[2.5rem] max-w-[2.5rem] flex items-center justify-center"
            >
                <img :src="user_aktif.foto" class="bg-cover rounded-full" />
            </div>
            <div
                class="truncate text-[1rem] text-base-content capitalize drop-shadow-md font-semibold"
                :class="{ hidden: sidebar }"
            >
                {{ user_aktif.nama }}
                <!-- Clarissa Levinia Setia Santoso -->
            </div>
        </div>
    </li>
    <li class="menu-title mt-4" :class="{ hidden: sidebar }">
        <span class="label-text truncate">Dashboard</span>
    </li>
    <Link :href="route('dashboard')">
        <li>
            <a :class="{ active: $page.component == 'Dashboard' }">
                <i class="fa-solid fa-home"></i>
                <div :class="{ hidden: sidebar }" class="truncate">
                    Dashboard
                </div>
            </a>
        </li>
    </Link>
    <li class="menu-title mt-4" :class="{ hidden: sidebar }">
        <span class="label-text truncate">Custom Menu</span>
    </li>
    <li>
        <a>
            <i class="fa fa-list"></i>
            <div :class="{ hidden: sidebar }" class="truncate">Custom 1</div>
        </a>
    </li>
    <li class="menu-title mt-4" :class="{ hidden: sidebar }">
        <span class="label-text truncate">Pengaturan</span>
    </li>
    <Link :href="route('pengaturan.profil.index')">
        <li>
            <a :class="{ active: $page.component == 'pengaturan/profil' }">
                <i class="fa-solid fa-user-gear"></i>
                <div :class="{ hidden: sidebar }" class="truncate">Profil</div>
            </a>
        </li>
    </Link>
    <Link :href="route('pengaturan.users.index')">
        <li>
            <a :class="{ active: $page.component == 'pengaturan/users' }">
                <i class="fa-solid fa-users-gear"></i>
                <div :class="{ hidden: sidebar }" class="truncate">Users</div>
            </a>
        </li>
    </Link>
    <Link :href="route('pengaturan.perusahaan.index')">
        <li>
            <a :class="{ active: $page.component == 'pengaturan/perusahaan' }">
                <i class="fa-solid fa-house-lock"></i>
                <div :class="{ hidden: sidebar }" class="truncate">
                    Perusahaan
                </div>
            </a>
        </li>
    </Link>
    <Link :href="route('logout')" method="post" as="li" class="mb-4">
        <a>
            <i class="fa-solid fa-right-from-bracket"></i>
            <div :class="{ hidden: sidebar }" class="truncate">Logout</div>
        </a>
    </Link>
</template>
<script>
export default {
    props: {
        sidebar: Boolean,
        user_aktif: Object,
    },
};
</script>
<style lang=""></style>
