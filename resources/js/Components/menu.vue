<template lang="">
    <li
        class="sticky border-b-2 border-base-300 top-0 z-10 py-4 flex justify-center items-center bg-base-200"
        :class="{ hidden: sidebar }"
    >
        <div
            class="text-xl text-center drop-shadow-lg uppercase font-black break-words w-[14rem]"
        >
            Perusahaan
        </div>
    </li>
    <li class="flex justify-center w-full gap-2 menu-title my-4">
        <div
            class="w-full h-full gap-2 flex items-center justify-start"
            :class="{ 'justify-center': sidebar }"
        >
            <div
                class="h-full min-w-[2.5rem] max-w-[2.5rem] flex items-center justify-center"
            >
                <img
                    src="https://picsum.photos/200"
                    class="bg-cover rounded-full"
                />
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
        <span class="label-text truncate">Category</span>
    </li>
    <li v-for="item in 5">
        <a>
            <i class="fa fa-list"></i>
            <div :class="{ hidden: sidebar }" class="truncate">
                Item {{ item }}
            </div>
        </a>
    </li>
    <li class="menu-title mt-4" :class="{ hidden: sidebar }">
        <span class="label-text truncate">Category</span>
    </li>
    <li v-for="item in 5">
        <a>
            <i class="fa fa-list"></i>
            <div :class="{ hidden: sidebar }" class="truncate">
                Item {{ item }}
            </div>
        </a>
    </li>
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
