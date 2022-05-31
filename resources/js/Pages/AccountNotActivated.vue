<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <AppLayout title="Account Requires Activation">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Account Requires Activation
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-md mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4"
                >
                    <h1 class="mb-2">Thank you for verifying your email.</h1>
                    <h2 class="mb-4">
                        The administrators has been notified and will be
                        checking your credentials. They may also contact you
                        through your email or contact number for futher
                        inquiries.
                    </h2>
                    <div>
                        <Link
                            :href="route('profile.show')"
                            class="underline text-sm text-gray-600 hover:text-gray-900"
                        >
                            Edit Profile</Link
                        >

                        <Link
                            :href="route('logout')"
                            method="post"
                            as="button"
                            class="underline text-sm text-gray-600 hover:text-gray-900 ml-2"
                        >
                            Log Out
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
