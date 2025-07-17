<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <form @submit.prevent="submit" class="bg-white p-8 rounded shadow-md w-96">
            <h1 class="text-xl font-bold mb-6 text-center">Login</h1>

            <div class="mb-4">
                <label class="block mb-1">Email</label>
                <input v-model="form.email" type="email" class="w-full border p-2 rounded" />
                <p v-if="errors.email" class="text-red-500 text-sm">{{ errors.email }}</p>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Password</label>
                <input v-model="form.password" type="password" class="w-full border p-2 rounded" />
                <p v-if="errors.password" class="text-red-500 text-sm">{{ errors.password }}</p>
            </div>

            <button :disabled="processing" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">
                Login
            </button>
        </form>
    </div>
</template>

<script setup>
import { route } from 'ziggy-js';
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    email: '',
    password: '',
});

const submit = () => {
   form.post(route('login'));
};

const { processing, errors } = form;
</script>
