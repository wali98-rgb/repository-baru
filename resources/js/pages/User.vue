<template>
  <div>
    <section v-if="name">
      <h1>Hello {{name}}.</h1>
    </section>

    <section v-else>
      <h1>Daftar User</h1>
      <ul>
        <li v-for="user in users">
          {{user.name}}
        </li>
      </ul>
    </section>
  </div>
</template>

<script>
  export default {
    props: ['name'],
    data() {
      return {
        users: [
          {id: 1, name: 'Baledemia'},
          {id: 2, name: 'Doremi'},
          {id: 3, name: 'Fasilasido'}
        ]
      }
    }
  }
</script>