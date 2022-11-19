<template>
  <section class="navigation">
    <div class="nav-container">
      <div class="brand">
        <router-link
          class="main-title"
          :to="{
            name: 'WELCOME_VIEW'
          }"
        >
          <span class="nav-title">
            Code-Exam
            <font-awesome-icon icon="fa-solid fa-laptop-code" />
          </span>
        </router-link>
      </div>
      <nav>
        <ul class="nav-list">
          <li
            v-for="(item, index) in headerItems"
            :key="`key_${index}`"
          >
            <router-link
              :key="`item_${index}`"
              :to="{
                name: item.name
              }"
            >
              {{ item.label }}
            </router-link>
          </li>
          <li>
            <div class="profile-icon-wrapper">
              <img
                class="profile-icon"
                src="/whopper.png"
              />
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {};
  },
  computed: {
    headerItems() {
      return [
        {
          name: "EXAM_LIST_VIEW",
          label: "Exams",
        },
        {
          name: "TEXTBOOK_LIST_VIEW",
          label: "Textbooks",
        },
      ];
    },
  },
  methods: {},
};
</script>

<style lang="scss" scoped>
// Navigation Variables
$content-width: 99%;
$breakpoint: 799px;
$nav-height: 6vh;
$nav-background: #262626;
$nav-font-color: #ffffff;
$link-hover-color: rgb(146, 146, 146);

// Outer navigation wrapper
.navigation {
  height: $nav-height;
  background: $nav-background;
  position: sticky;
  z-index: 999;
  top: 0;
}
// Logo and branding
.brand {
  position: absolute;
  padding-left: 20px;
  float: left;
  line-height: $nav-height;
  font-size: 1.4em;
  a,
  a:visited {
    color: $nav-font-color;
    text-decoration: none;
  }
}
// Container with no padding for navbar
.nav-container {
  max-width: $content-width;
  margin: 0 auto;
}
// Navigation
nav {
  float: right;
  ul {
    list-style: none;
    margin: 0;
    padding: 0;
    li {
      float: left;
      position: relative;
      a,
      a:visited {
        display: block;
        padding: 0 20px;
        line-height: $nav-height;
        background: $nav-background;
        color: $nav-font-color;
        text-decoration: none;
        &:hover {
          background: $link-hover-color;
          color: $nav-font-color;
        }
        &:not(:only-child):after {
          padding-left: 4px;
          content: " ▾";
        }
      }
      // Dropdown list
      ul li {
        min-width: 190px;
        a {
          padding: 15px;
          line-height: 20px;
        }
      }
    }
  }
}
// Page content
article {
  max-width: $content-width;
  margin: 0 auto;
  padding: 10px;
}
.profile-icon-wrapper {
  height: 5vh;
  display:flex;
  align-items: center;
  justify-content: center
}
.profile-icon {
  cursor: pointer;
  height: 85%;
  margin: 15px 20px;
  margin-top: 30%;
  border-radius: 50%;
}
.nav-title {
  font-size: 130%;
  font-family: "Impact";
  font-weight: bold;
}
</style>
