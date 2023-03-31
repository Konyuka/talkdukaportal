<script setup>
import { ref } from 'vue'
import QuestionModal from '@/Partials/Components/QuestionModal.vue'
import { router } from '@inertiajs/vue3'
// import { Inertia } from '@inertiajs/inertia'

const props = defineProps({
    title: String,
    description: String
})

// const title = ref(null)
// const description = ref(null)
const questionModal = ref(false)

const openQuestionModal = async (payload) => {
    const url = `/manual/${payload}`

    await router.reload(url, {
        only: ['title', 'description'],
    }).then((response)=>{
        console.log(response)
    })



    

    questionModal.value = true

    // if(payload=='senderID'){
    //     // title.value = 'Sender ID'
    //     // description.value = ""
    //     // Inertia.visit(`/posts/${slug}`)


    //     // router.reload({ only: ['users'] })
    // }
}

</script>

<template>
    <div class="py-5 px-10">

        <div class="grid grid-cols-2 gap-4">
            <div>
                <div class="mt-16 flex flex-col w-full">
                    <label for="username" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">SMS Campaign Label</label>
                    <input tabindex="0" type="text" id="username" name="username" required
                        class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 bg-transparent placeholder-gray-500 text-gray-600 dark:text-gray-400"
                        placeholder="Loan Defaulters, New Leads" />
                </div>
            </div>

            <div>
                <div class="mt-16 flex flex-col w-full ">
                    <div class="flex flex-row justify-between w-1/2">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Select Sender ID</label>
                        <i @click="openQuestionModal('senderID')" class="text-indigo-600 fas fa-question transform transition hover:scale-150 duration-700 cursor-pointer"></i>
                    </div>
                    <div class="mt-2">
                        <select id="country" name="country" autocomplete="country-name"
                            class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>United States</option>
                            <option>Canada</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-10 grid grid-cols-2 gap-4">
            <div>
                <div class="mt-8 flex flex-col w-full">
                    <label for="about" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Text
                        Message</label>
                    <div class="sm:col-span-3 py-5">
                        <div class="flex flex-row justify-between w-1/2">
                            <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Select Message Template</label>
                            <i @click="openQuestionModal('senderID')" class="text-indigo-600 fas fa-question transform transition hover:scale-150 duration-700 cursor-pointer"></i>
                        </div>
                        <div class="mt-2">
                            <select id="country" name="country" autocomplete="country-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option>United States</option>
                                <option>Canada</option>
                            </select>
                        </div>
                    </div>
                    <textarea id="about" name="about" required
                        class="bg-transparent border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 resize-none placeholder-gray-500 text-gray-600 dark:text-gray-400"
                        placeholder="Let the world know who you are" rows="15"></textarea>
                    <p class="w-full text-right text-xs pt-1 text-gray-600 dark:text-gray-400">Character Limit:
                        200</p>
                </div>
            </div>

            <div>

                <div class="mt-8 flex flex-col w-full">
                    <label for="about" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Mobile Number</label>
                    <div class="sm:col-span-3 py-5">
                        <div class="flex flex-row justify-between w-1/2">
                            <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Select User Group</label>
                            <i @click="openQuestionModal('senderID')" class="text-indigo-600 fas fa-question transform transition hover:scale-150 duration-700 cursor-pointer"></i>
                        </div>
                        <div class="mt-2">
                            <select id="country" name="country" autocomplete="country-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option>United States</option>
                            </select>
                        </div>
                    </div>
                    <textarea id="about" name="about" required
                        class="bg-transparent border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 resize-none placeholder-gray-500 text-gray-600 dark:text-gray-400"
                        placeholder="Let the world know who you are" rows="15"></textarea>
                    <p class="w-full text-right text-xs pt-1 text-gray-600 dark:text-gray-400">Character Limit:
                        200</p>
                </div>
            </div>
        </div>

        <div class="mt-10 container mx-auto w-11/12 xl:w-full">
            <div class="w-full py-4 sm:px-0 bg-white dark:bg-gray-800 flex justify-end">
                <button role="button" aria-label="Save form"
                    class="mr-2 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 focus:outline-none transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-8 py-2 text-sm"
                    type="submit">Schedule Send</button>

                <button role="button" aria-label="Save form"
                    class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 focus:outline-none transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-8 py-2 text-sm"
                    type="submit">Quick Send</button>
            </div>
        </div>

        </div>

        <div class="container">
            <QuestionModal v-if="questionModal" :title="title" :description="description" />
        </div>


</template>

<style></style>