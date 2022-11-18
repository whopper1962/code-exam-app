<template>
  <div class="breadcrumb">
    <a
      v-for="(exam, index) in exams"
      @click="tabClicked(index)"
      :key="`exam_${index}`"
      :class="{
        'current': index === selectedExamNumber
      }"
    >
      <span class="breadcrumb__inner">
        <span
          v-if="exam.title"
          class="breadcrumb__title"
        >
          {{ exam.title }}
        </span>
      </span>
    </a>
    <a
      @click="tabClicked(exams.length)"
      :class="{
        'current': exams.length === selectedExamNumber
      }"
    >
      <span class="breadcrumb__inner">
        <span
          class="breadcrumb__title"
        >
          Submit!
          <font-awesome-icon
            class="font-awesome-icon-style"
            icon="fa-solid fa-rocket"
          />
        </span>
      </span>
    </a>
  </div>
</template>

<script>
export default {
  props: {
    value: [String, Number],
    exams: [Array],
  },
  computed: {
    selectedExamNumber: {
      get() {
        return this.value;
      },
      set(clickedIndex) {
        this.$emit("input", clickedIndex);
      },
    },
  },
  methods: {
    tabClicked(clickedIndex) {
      this.selectedExamNumber = clickedIndex;
    },
  },
};
</script>

<style lang="scss">
$base: 38px;

.container {
  display: flex;
  margin: 0px 5px;
  flex-direction: column;
  height: 100%;
  width: 100%;
  min-width: 480px;
  padding: 0 40px;
}

.breadcrumb {
  margin-top: 500px;
  display: flex;
  border-radius: 6px;
  overflow: hidden;
  margin: auto;
  text-align: center;
  top: 50%;
  width: 100%;
  height: $base * 1.5;
  z-index: 1;
  background-color: #ddd;
  font-size: 16px;
}

// .current {
//   background-color: yellowgreen;
// }

.breadcrumb a {
  cursor: pointer;
  position: relative;
  display: flex;
  flex-grow: 1;
  text-decoration: none;
  margin: auto;
  height: 100%;
  padding-left: $base;
  padding-right: 0;
  color: #666;
}

.breadcrumb a:first-child {
  padding-left: $base / 2.5;
}

.breadcrumb a:last-child {
  padding-right: $base / 2.5;
}

.breadcrumb a:after {
  content: "";
  position: absolute;
  display: inline-block;
  width: $base * 1.5;
  height: $base * 1.5;
  top: 0;
  right: $base / 1.35 * -1;
  background-color: #ddd;
  border-top-right-radius: 5px;
  transform: scale(0.707) rotate(45deg);
  box-shadow: 1px -1px rgba(0, 0, 0, 0.25);
  z-index: 1;
}

.breadcrumb a:last-child:after {
  content: none;
}

.breadcrumb__inner {
  display: flex;
  flex-direction: column;
  margin: auto;
  z-index: 2;
}

.breadcrumb__title {
  font-weight: bold;
}

.breadcrumb a.active,
.breadcrumb a:hover {
  background: darken(rgb(102, 190, 210), 20%);
  color: white;
}

.breadcrumb a.active:after,
.breadcrumb a:hover:after {
  background: darken(rgb(102, 190, 210), 20%);
  color: white;
}
// 1000px
@media all and (max-width: 1000px) {
  .breadcrumb {
    font-size: 12px;
  }
}

// 710px
@media all and (max-width: 710px) {
  .breadcrumb__desc {
    display: none;
  }

  .breadcrumb {
    height: $base;
  }

  .breadcrumb a {
    padding-left: $base / 1.5;
  }

  .breadcrumb a:after {
    content: "";
    width: $base * 1;
    height: $base * 1;
    right: $base / 2 * -1;
    transform: scale(0.707) rotate(45deg);
  }
}

.font-awesome-icon-style {
  margin-left: 1px;
}
</style>
