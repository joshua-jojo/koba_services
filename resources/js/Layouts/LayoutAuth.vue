<template lang="">
    <Head>
        <link rel="shortcut icon" type="image/png" :href="user_aktif.logo" />
        <title>{{ this.$page.component.split("/").slice(-1)[0] }}</title>
    </Head>
    <div
        class="flex justify-center items-center w-full min-h-screen p-8 overflow-hidden select-none"
    >
        <transition name="auth" mode="out-in" appear>
            <main :key="$page.url">
                <slot></slot>
            </main>
        </transition>
        <div class="absolute min-h-screen min-w-full -z-10 overflow-hidden">
            <div
                class="min-h-screen w-full absolute backdrop-blur-[10rem]"
            ></div>
            <div
                class="w-[30rem] h-[30rem] bubble-1 bg-primary rounded-full absolute -z-10"
            ></div>
            <div
                class="w-[30rem] h-[30rem] bubble-2 bg-secondary rounded-full absolute -z-10"
            ></div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        user_aktif: Object,
    },
};
</script>
<style>
.opacity-enter-active,
.opacity-leave-active {
    transition: opacity 0.5s ease;
}

.opacity-enter-from,
.opacity-leave-to {
    opacity: 0;
}

.bubble-1 {
    animation: bubble-left 10s ease-in-out infinite;
}
.bubble-2 {
    animation: bubble-right 10s ease-in-out infinite;
}
@keyframes bubble-left {
    0% {
        opacity: 30%;
        transform: translate(0%, 0%);
    }
    25% {
        transform: translate(100%, 100%);
    }
    50% {
        opacity: 10%;
        transform: translate(200%, 50%);
    }
    75% {
        transform: translate(100%, 0%);
    }
    100% {
        opacity: 30%;
        transform: translate(0%, 0%);
    }
}
@keyframes bubble-right {
    0% {
        opacity: 20%;
        transform: translate(200%, 0%);
    }
    25% {
        transform: translate(100%, 100%);
    }
    50% {
        opacity: 10%;
        transform: translate(200%, 50%);
    }
    75% {
        transform: translate(100%, 0%);
    }
    100% {
        opacity: 20%;
        transform: translate(200%, 0%);
    }
}

.auth-enter-from {
    transform: translateX(-200%);
}
.auth-enter-to {
    transform: translateX(0%);
}
.auth-leave-from {
    transform: translateX(0%);
}
.auth-leave-to {
    transform: translateX(200%);
}
.auth-enter-active {
    animation: page-transisi-in 0.7s ease-in-out;
}
.auth-leave-active {
    animation: page-transisi-out 0.7s ease-in-out;
}

@keyframes page-transisi-in {
    0% {
        transform: translateX(-200%);
    }
    100% {
        transform: translateX(0%);
    }
}
@keyframes page-transisi-out {
    0% {
        transform: translateX(0%);
    }
    100% {
        transform: translateX(200%);
    }
}
</style>
