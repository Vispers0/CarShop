<template>
    <div id="menu">
        <div class="container">
            <p>Main menu</p>
        </div>
        <div class="container">
            <button class="menu-button">Cars</button>
        </div>
        <div class="container">
            <button class="menu-button">
                <a href="/dealers" wire:navigate>
                    Dealers
                </a>
            </button>
        </div>
    </div>
</template>

<script>
    import "../../css/main.css";
    export default {
        name: "#main",
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
