<template>
  <div>
    <button
      class="btn btn-primary ml-4"
      @click="followUser"
      v-text="buttonText"
    ></button>
  </div>
</template>

<script>
export default {
  props: ["user_id", "follows"],

  mounted() {
    console.log("Component mounted.");
  },
  data: function () {
    return {
      status: this.follows,
    };
  },
  methods: {
    async followUser() {
      try {
        let response = await axios.post("/follows/" + this.user_id);
        console.log(response.data);
        this.status = !this.status;
      } catch (error) {
        if (error.response.status == 401) {
          window.location = "/login";
        }
      }
    },
  },
  computed: {
    buttonText() {
      return this.status ? "Unfollow" : "Follow";
    },
  },
};
</script>
