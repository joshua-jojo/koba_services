<template lang="">
    <div>
        <div
            class="grid lg:grid-cols-2 w-full h-full bg-base-200 p-4 rounded-[2rem] max-w-4xl justify-items-center overflow-hidden border-2 border-base-300 shadow-[rgba(0,_0,_0,_0.09)_30px_30px_40px_3px]"
        >
            <div class="w-96 h-full hidden lg:flex justify-center items-center">
                <div class="w-96 h-96">
                    <img :src="img" alt="" class="w-full" />
                </div>
            </div>
            <div
                class="w-full h-full flex flex-col justify-center p-4 lg:p-8 lg:border-l-2 border-base-300"
            >
                <div class="text-3xl font-bold">Perusahaan</div>
                <form @submit.prevent="submit" class="grid gap-3">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Nama Perusahaan</span>
                        </label>
                        <input
                            type="text"
                            class="input input-sm input-bordered"
                            placeholder="Nama Perusahaan"
                            v-model="form.nama"
                        />
                        <label class="label" v-if="form.errors.nama">
                            <span class="label-text-alt text-error">{{
                                form.errors.nama
                            }}</span>
                        </label>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Alamat Perusahaan</span>
                        </label>
                        <input
                            class="textarea textarea-bordered"
                            placeholder="Alamat Perusahaan"
                            v-model="form.alamat"
                        />
                        <label class="label" v-if="form.errors.alamat">
                            <span class="label-text-alt text-error">{{
                                form.errors.alamat
                            }}</span>
                        </label>
                    </div>
                    <button
                        class="btn btn-success mt-4 w-full"
                        :class="{ 'loading btn-disabled': form.processing }"
                    >
                        Buat
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import LayoutAuth from "@/Layouts/LayoutAuth.vue";
import { useForm } from "@inertiajs/inertia-vue3";

export default {
    layout: LayoutAuth,
    props: {
        img: String,
    },
    setup() {
        const form = useForm({
            nama: null,
            alamat: null,
        });
        function submit() {
            form.post(route("perusahaan.store"));
        }
        return {
            form,
            submit,
        };
    },
};
</script>
<style lang=""></style>
