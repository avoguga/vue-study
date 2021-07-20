<template>
    <div class="hello">
        <h3>Bem vindo ao formulario!</h3>
        <form class="formulario" action="" method="post">
            <label for="html">Insira aqui seu email</label>
            <br />
            <input type="email" v-model="email" />
            {{ email }}
            <br />

            <label for="html">Insira aqui seu user</label>
            <br />
            <input type="text" v-model="user" />
            {{ user }}
            <br />

            <label for="html">Insira aqui sua senha</label>
            <br />
            <input type="password" v-model="senha" />
            {{ senha }}
            <br />
        </form>
    </div>
</template>

<script>
export default {
    name: "HelloWorld",
    data() {
        return {
            email: "",
            user: "",
            senha: "",
        };
    },
};
</script>

<style scoped>
.formulario {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: auto;
}
</style>
