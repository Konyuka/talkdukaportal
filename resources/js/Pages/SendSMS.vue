<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {ref } from 'vue'
import QuickSMS from '@/Partials/Pages/QuickSMS.vue'


const currentMenu = ref('sendSMS');

</script>

<template>
    <AppLayout>
        <div>

            <div>
                <div class="sm:hidden">
                    <label for="tabs" class="sr-only">Select a tab</label>
                    <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
                    <select id="tabs" name="tabs"
                        class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        <option>Send SMS</option>

                        <option>Schedule SMS</option>

                        <option selected>Message Templates</option>
                    </select>
                </div>
                <div class="hidden sm:block">
                    <div class="border-b border-gray-200">
                        <nav class="-mb-px flex" aria-label="Tabs">
                            <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                            <button href="#"
                                class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 w-1/3 border-b-2 py-4 px-1 text-center text-sm font-medium">Send
                                SMS</button>

                            <button href="#"
                                class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 w-1/3 border-b-2 py-4 px-1 text-center text-sm font-medium">Schedule
                                SMS</button>

                            <button href="#"
                                class="border-indigo-500 text-indigo-600 w-1/3 border-b-2 py-4 px-1 text-center text-sm font-medium"
                                aria-current="page">Meesage Templates</button>

                        </nav>
                    </div>
                </div>
            </div>

            <div>
                <QuickSMS />
            </div>


    </div>
</AppLayout></template>

<style scoped></style>