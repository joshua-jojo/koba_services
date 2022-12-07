<template lang="">
    <div class="grid lg:grid-cols-2 gap-4 w-full h-full">
        <div
            class="w-full h-full card p-4 border shadow-lg flex flex-col lg:col-span-2"
        >
            <div class="font-semibold drop-shadow-md mb-2">
                Update Data Profiles
            </div>
            <form @submit.prevent="submit_edit_profile">
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Nama</span>
                    </label>
                    <input
                        type="text"
                        class="input input-sm input-bordered"
                        placeholder="Nama"
                        v-model="edit_profile.name"
                    />
                    <label class="label">
                        <span
                            class="label-text-alt text-error"
                            v-if="edit_profile.errors.name"
                            >{{ edit_profile.errors.name }}</span
                        >
                    </label>
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Email</span>
                    </label>
                    <input
                        type="email"
                        class="input input-sm input-bordered"
                        placeholder="Email"
                        v-model="edit_profile.email"
                    />
                    <label class="label">
                        <span
                            class="label-text-alt text-error"
                            v-if="edit_profile.errors.email"
                            >{{ edit_profile.errors.email }}</span
                        >
                    </label>
                </div>
                <div class="flex justify-end">
                    <button
                        type="submit"
                        :class="{
                            'loading btn-disabled': edit_profile.processing,
                        }"
                        class="btn btn-sm btn-info"
                    >
                        Simpan
                    </button>
                </div>
            </form>
        </div>
        <div class="w-full h-full card p-4 border shadow-lg flex flex-col">
            <div class="font-semibold drop-shadow-md mb-2">Ganti Password</div>
            <form @submit.prevent="updatePassword">
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Password Lama</span>
                    </label>
                    <input
                        type="password"
                        class="input input-sm input-bordered"
                        placeholder="Password Lama"
                        v-model="update_password.current_password"
                    />
                    <label class="label">
                        <span
                            class="label-text-alt text-error"
                            v-if="update_password.errors.current_password"
                            >{{ update_password.errors.current_password }}</span
                        >
                    </label>
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Password Baru</span>
                    </label>
                    <input
                        type="password"
                        class="input input-sm input-bordered"
                        placeholder="Password Baru"
                        v-model="update_password.password"
                    />
                    <label class="label">
                        <span
                            class="label-text-alt text-error"
                            v-if="update_password.errors.password"
                            >{{ update_password.errors.password }}</span
                        >
                    </label>
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Konfirmasi Password Baru</span>
                    </label>
                    <input
                        type="password"
                        class="input input-sm input-bordered"
                        placeholder="Konfirmasi Password Baru"
                        v-model="update_password.password_confirmation"
                    />
                    <label class="label">
                        <span
                            class="label-text-alt text-error"
                            v-if="update_password.errors.password_confirmation"
                            >{{
                                update_password.errors.password_confirmation
                            }}</span
                        >
                    </label>
                </div>
                <div class="flex justify-end">
                    <button
                        class="btn btn-info btn-sm"
                        :class="{
                            'btn-disabled loading': update_password.processing,
                        }"
                    >
                        Update
                    </button>
                </div>
            </form>
        </div>
        <div class="w-full h-max card p-4 border shadow-lg flex flex-col">
            <div class="font-semibold drop-shadow-md mb-2">Hapus Akun</div>
            <p class="mt-1 text-sm text-gray-600">
                Setelah akun Anda dihapus, semua sumber daya dan datanya akan
                dihapus secara permanen. Sebelum menghapus akun anda, harap
                unduh data atau informasi apa pun yang ingin anda pertahankan.
            </p>
            <div class="flex items-end h-full justify-end">
                <label for="konfirmasi_hapus" class="btn btn-error btn-sm">
                    hapus
                </label>
            </div>
        </div>
    </div>
    <modal-md id="konfirmasi_hapus">
        <template v-slot:title>Konfirmasi Penghapusan</template>
        <template v-slot:content>
            <div class="flex flex-col gap-4">
                <div class="">
                    Setelah akun anda dihapus, semua sumber daya dan datanya
                    akan dihapus secara permanen. Silahkan masukkan kata sandi
                    anda untuk mengonfirmasi bahwa anda ingin menghapus akun
                    anda secara permanen.
                </div>
                <div class="form-control">
                    <input
                        type="password"
                        class="input input-sm input-bordered"
                        placeholder="Masukkan Password"
                        v-model="hapus_akun.password"
                    />
                    <label class="label" v-if="hapus_akun.errors.password">
                        <span class="text-error label-text-alt">{{
                            hapus_akun.errors.password
                        }}</span>
                    </label>
                </div>
            </div>
        </template>
        <template v-slot:action>
            <button
                class="btn btn-error"
                :class="{ 'loading btn-disabled': hapus_akun.processing }"
                @click="submit_hapus"
            >
                Hapus
            </button>
        </template>
    </modal-md>
</template>
<script>
import LayoutMain from "@/Layouts/LayoutMain.vue";
import { useForm } from "@inertiajs/inertia-vue3";

export default {
    props: {
        user_aktif: Object,
    },
    layout: LayoutMain,
    setup(props) {
        const update_password = useForm({
            current_password: "",
            password: "",
            password_confirmation: "",
        });
        const hapus_akun = useForm({
            password: "",
        });
        const edit_profile = useForm({
            name: props.user_aktif.nama,
            email: props.user_aktif.email,
        });
        return {
            update_password,
            hapus_akun,
            edit_profile,
        };
    },
    methods: {
        submit_edit_profile() {
            this.edit_profile.patch(route("profile.update"), {
                onSuccess: () => {
                    this.$store.commit("notifikasi", {
                        tipe: "success",
                        pesan: "data profil berhasil di simpan",
                    });
                },
            });
        },
        submit_hapus() {
            this.hapus_akun.delete(route("profile.destroy"), {
                preserveScroll: true,
                onSuccess: () => {
                    this.$store.commit("notifikasi", {
                        tipe: "success",
                        pesan: "akun berhasil dihapus",
                    });
                },
                onFinish: () => this.hapus_akun.reset(),
            });
        },
        updatePassword() {
            this.update_password.put(route("password.update"), {
                preserveScroll: true,
                onSuccess: () => {
                    this.update_password.reset();
                    this.$store.commit("notifikasi", {
                        tipe: "success",
                        pesan: "password berhasil di ubah",
                    });
                },
                onError: () => {
                    if (this.update_password.errors.password) {
                        this.update_password.reset(
                            "password",
                            "password_confirmation"
                        );
                    }
                    if (this.update_password.errors.current_password) {
                        this.update_password.reset("current_password");
                    }
                },
            });
        },
    },
};
</script>
<style lang=""></style>
