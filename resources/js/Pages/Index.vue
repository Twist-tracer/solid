<template>
    <Head>
        <title>Index inertia page</title>
    </Head>

    <h1>Index inertia page with param "{{param}}"</h1>

    <ul>
        <li>
            Inertia
        </li>
        <li>
            <Link href="/about">About</Link>
        </li>
    </ul>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
    props: {
        param: {
            type: String
        }
    },
    components: {
        Link
    }
}
</script>
