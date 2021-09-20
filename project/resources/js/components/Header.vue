<template>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
                <router-link :to=" { name: 'home' } " class="navbar-brand">
                    Boolpress
                </router-link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item" v-for="(link, index) in menu" :key="index">
                            <router-link :to="{ name: link.routeName }" class="nav-link"> 
                                {{ link.label }}
                            </router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</template>

<script>
export default {
    name: "Header",
    data() {
        return {
            menu: [
                {
                    label: 'Home',
                    routeName: 'home'
                },
                {
                    label: 'About',
                    routeName: 'about'
                },
                {
                    label: 'Contact',
                    routeName: 'contact'
                },
                {
                    label: 'Address',
                    routeName: 'address'
                },
            ]
        }
    }
}
</script>

<style lang="scss" scoped>
</style>