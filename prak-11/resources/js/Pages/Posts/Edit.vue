<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { useForm, usePage } from "@inertiajs/vue3";

const props = defineProps({
    status: {
        type: String,
    },
    post: Object,
});
const form = useForm({
    title: props.post.title,
    category: props.post.category,
    content: props.post.content,
    author: props.post.author,
});
const submit = () => {
    form.put(route("posts.update", props.post.id));
};
</script>
<template>
    <Head title="Posts" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Add Posts
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-2 lg:px-2 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <form
                        name="createForm"
                        @submit.prevent="submit"
                        class="mt-6 space-y-6"
                    >
                        <div>
                            <InputLabel for="title" value="title" />
                            <TextInput
                                id="title"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.title"
                                required
                                autofocus
                                autocomplete="off"
                            />

                            <InputError
                                class="mt-2"
                                :message="form.errors.title"
                            />
                        </div>

                        <div>
                            <InputLabel for="category" value="category" />

                            <TextInput
                                id="category"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.category"
                                required
                                autocomplete="off"
                            />

                            <InputError
                                class="mt-2"
                                :message="form.errors.category"
                            />
                        </div>

                        <div>
                            <InputLabel for="content" value="content" />

                            <TextInput
                                id="content"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.content"
                                required
                                autocomplete="off"
                            />

                            <InputError
                                class="mt-2"
                                :message="form.errors.content"
                            />
                        </div>

                        <div>
                            <InputLabel for="author" value="author" />

                            <TextInput
                                id="content"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.author"
                                required
                                autocomplete="off"
                            />

                            <InputError
                                class="mt-2"
                                :message="form.errors.author"
                            />
                        </div>

                        <div class="flex items-center gap-4">
                            <PrimaryButton :disabled="form.processing"
                                >Save</PrimaryButton
                            >

                            <Transition
                                enter-from-class="opacity-0"
                                leave-to-class="opacity-0"
                                class="transition ease-in-out"
                            >
                                <p
                                    v-if="form.recentlySuccessful"
                                    class="text-sm text-gray-600"
                                >
                                    Saved.
                                </p>
                            </Transition>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
