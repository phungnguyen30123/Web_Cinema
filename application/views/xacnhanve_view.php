
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css
">
    <link href="<?php echo base_url(); ?>css/sidebar.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <cript src="<?php echo base_url(); ?>https://code.jquery.com/jquery-3.4.1.js"></cript>
    <cript src="<?php echo base_url(); ?>https://kit.fontawesome.com/a076d05399.js"></cript>

 
  <!-- or -->
 



       <title>quản lý người dùng</title>
       
<style>
  @charset "UTF-8";
@import url('https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
@import url(https://fonts.googleapis.com/css?family=Lato:300,400,400i,700);
@import url(https://fonts.googleapis.com/css?family=Niconne);
@import url('https://fonts.googleapis.com/css2?family=Alata&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
:root {
  --blue: #007bff;
  --indigo: #6610f2;
  --purple: #6f42c1;
  --pink: #e83e8c;
  --red: #dc3545;
  --orange: #fd7e14;
  --yellow: #ffc107;
  --green: #28a745;
  --teal: #20c997;
  --cyan: #17a2b8;
  --white: #FFF;
  --gray: #6c757d;
  --gray-dark: #343a40;
  --primary: rgb(0, 28, 64);
  --secondary: #6c757d;
  --success: #28a745;
  --info: #17a2b8;
  --warning: #ffc107;
  --danger: #dc3545;
  --light: #f8f9fa;
  --dark: #343a40;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sarabun:  'Roboto', sans-serif;
  --btn-fun: #4bac4d;
}

*,
*::before,
*::after {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

html {
  font-family: var(--font-family-sarabun);
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -ms-overflow-style: scrollbar;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

@-ms-viewport {
  width: device-width;
}

article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block;
}

body {
  margin: 0;
  font-family: var(--font-family-sarabun);
  font-size: 14px;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #FFF;
}

[tabindex="-1"]:focus {
  outline: 0 !important;
}

hr {
  -webkit-box-sizing: content-box;
          box-sizing: content-box;
  height: 0;
  overflow: visible;
}

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: .5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

dfn {
  font-style: italic;
}

b,
strong {
  font-weight: bolder;
}

small {
  font-size: 80%;
}

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -.25em;
}

sup {
  top: -.5em;
}

a {
  color: rgb(0, 28, 64);
  text-decoration: none;
  background-color: transparent;
  -webkit-text-decoration-skip: objects;
}



a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):focus {
  outline: 0;
}

pre,
code,
kbd,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  font-size: 1em;
}

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar;
}

figure {
  margin: 0 0 1rem;
}

img {
  vertical-align: middle;
  border-style: none;
}

svg:not(:root) {
  overflow: hidden;
}

table {
  border-collapse: collapse;
}

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom;
}

th {
  text-align: inherit;
}

label {
  display: inline-block;
  margin-bottom: 0.5rem;
}

button {
  border-radius: 0;
}

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  outline: none;
  /* padding: 26px !important; */
}
textarea{
  height: 90px !important;
}
button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

.btn, button,
html [type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
  margin-bottom: 5px;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

input[type="radio"],
input[type="checkbox"] {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  padding: 0;
}

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox;
}

textarea {
  overflow: auto;
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal;
}

progress {
  vertical-align: baseline;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none;
}

[type="search"]::-webkit-search-cancel-button,
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

summary {
  display: list-item;
  cursor: pointer;
}

template {
  display: none;
}

[hidden] {
  display: none !important;
}

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-family: inherit;
  font-weight: bold;
  line-height: 1.2;
  color: inherit;
}

h1, .h1 {
  font-size: 2.1875rem;
}

h2, .h2 {
  font-size: 1.75rem;
}

h3, .h3 {
  font-size: 1.53125rem;
}

h4, .h4 {
  font-size: 1.3125rem;
}

h5, .h5 {
  font-size: 1.09375rem;
}

h6, .h6 {
  font-size: 0.875rem;
}

.lead {
  font-size: 1.09375rem;
  font-weight: 300;
}

.display-1 {
  font-size: 6rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-2 {
  font-size: 5.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-4 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.2;
}

hr {
  margin-top: 10px;
  margin-bottom: 10px;
  border: 0;
  border-top: 1px solid rgb(255 255 255 / 26%);
}

small,
.small {
  font-size: 80%;
  font-weight: 400;
}

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}

.list-unstyled, .app-nav, .app-menu, .treeview-menu {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}

.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 90%;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.09375rem;
}

.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #6c757d;
}

.blockquote-footer::before {
  content: "\2014 \00A0";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0.25rem;
  background-color: #FFF;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 90%;
  color: #6c757d;
}

code {
  font-size: 87.5%;
  color: #e83e8c;
  word-break: break-word;
}

a > code {
  color: inherit;
}

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 87.5%;
  color: #FFF;
  background-color: #212529;
  border-radius: 0.2rem;
}

kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: 700;
}

pre {
  display: block;
  font-size: 87.5%;
  color: #212529;
}

pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {
  .container {
    max-width: 1140px;
  }
}

.container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}

.no-gutters {
  margin-right: 0;
  margin-left: 0;
}

.no-gutters > .col,
.no-gutters > [class*="col-"] {
  padding-right: 0;
  padding-left: 0;
}
.col-sm-2{
  padding-left: 10px;
}

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}

.col {
  -ms-flex-preferred-size: 0;
      flex-basis: 0;
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  max-width: 100%;
}

.col-auto {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: auto;
  max-width: none;
}

.col-1 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 8.3333333333%;
          flex: 0 0 8.3333333333%;
  max-width: 8.3333333333%;
}

.col-2 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 16.6666666667%;
          flex: 0 0 16.6666666667%;
  max-width: 16.6666666667%;
}

.col-3 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 25%;
          flex: 0 0 25%;
  max-width: 25%;
}

.col-4 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 33.3333333333%;
          flex: 0 0 33.3333333333%;
  max-width: 33.3333333333%;
}

.col-5 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 41.6666666667%;
          flex: 0 0 41.6666666667%;
  max-width: 41.6666666667%;
}

.col-6 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 50%;
          flex: 0 0 50%;
  max-width: 50%;
}

.col-7 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 58.3333333333%;
          flex: 0 0 58.3333333333%;
  max-width: 58.3333333333%;
}

.col-8 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 66.6666666667%;
          flex: 0 0 66.6666666667%;
  max-width: 66.6666666667%;
}

.col-9 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 75%;
          flex: 0 0 75%;
  max-width: 75%;
}

.col-10 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 83.3333333333%;
          flex: 0 0 83.3333333333%;
  max-width: 83.3333333333%;
}

.col-11 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 91.6666666667%;
          flex: 0 0 91.6666666667%;
  max-width: 91.6666666667%;
}

.col-12 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
  max-width: 100%;
}

.order-first {
  -webkit-box-ordinal-group: 0;
      -ms-flex-order: -1;
          order: -1;
}

.order-last {
  -webkit-box-ordinal-group: 14;
      -ms-flex-order: 13;
          order: 13;
}

.order-0 {
  -webkit-box-ordinal-group: 1;
      -ms-flex-order: 0;
          order: 0;
}

.order-1 {
  -webkit-box-ordinal-group: 2;
      -ms-flex-order: 1;
          order: 1;
}

.order-2 {
  -webkit-box-ordinal-group: 3;
      -ms-flex-order: 2;
          order: 2;
}

.order-3 {
  -webkit-box-ordinal-group: 4;
      -ms-flex-order: 3;
          order: 3;
}

.order-4 {
  -webkit-box-ordinal-group: 5;
      -ms-flex-order: 4;
          order: 4;
}

.order-5 {
  -webkit-box-ordinal-group: 6;
      -ms-flex-order: 5;
          order: 5;
}

.order-6 {
  -webkit-box-ordinal-group: 7;
      -ms-flex-order: 6;
          order: 6;
}

.order-7 {
  -webkit-box-ordinal-group: 8;
      -ms-flex-order: 7;
          order: 7;
}

.order-8 {
  -webkit-box-ordinal-group: 9;
      -ms-flex-order: 8;
          order: 8;
}

.order-9 {
  -webkit-box-ordinal-group: 10;
      -ms-flex-order: 9;
          order: 9;
}

.order-10 {
  -webkit-box-ordinal-group: 11;
      -ms-flex-order: 10;
          order: 10;
}

.order-11 {
  -webkit-box-ordinal-group: 12;
      -ms-flex-order: 11;
          order: 11;
}

.order-12 {
  -webkit-box-ordinal-group: 13;
      -ms-flex-order: 12;
          order: 12;
}

.offset-1 {
  margin-left: 8.3333333333%;
}

.offset-2 {
  margin-left: 16.6666666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.3333333333%;
}

.offset-5 {
  margin-left: 41.6666666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.3333333333%;
}

.offset-8 {
  margin-left: 66.6666666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.3333333333%;
}

.offset-11 {
  margin-left: 91.6666666667%;
}

@media (min-width: 576px) {
  .col-sm {
    -ms-flex-preferred-size: 0;
        flex-basis: 0;
    -webkit-box-flex: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }
  .col-sm-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-sm-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .col-sm-2 {
    max-width: 0%;
    display: table;
}
  .col-sm-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .col-sm-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .col-sm-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .col-sm-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .col-sm-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .col-sm-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .col-sm-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .col-sm-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .col-sm-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .col-sm-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .order-sm-first {
    -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
            order: -1;
  }
  .order-sm-last {
    -webkit-box-ordinal-group: 14;
        -ms-flex-order: 13;
            order: 13;
  }
  .order-sm-0 {
    -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
            order: 0;
  }
  .order-sm-1 {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
  }
  .order-sm-2 {
    -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
            order: 2;
  }
  .order-sm-3 {
    -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
            order: 3;
  }
  .order-sm-4 {
    -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
            order: 4;
  }
  .order-sm-5 {
    -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
            order: 5;
  }
  .order-sm-6 {
    -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
            order: 6;
  }
  .order-sm-7 {
    -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
            order: 7;
  }
  .order-sm-8 {
    -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
            order: 8;
  }
  .order-sm-9 {
    -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
            order: 9;
  }
  .order-sm-10 {
    -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
            order: 10;
  }
  .order-sm-11 {
    -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
            order: 11;
  }
  .order-sm-12 {
    -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
            order: 12;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.3333333333%;
  }
  .offset-sm-2 {
    margin-left: 16.6666666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.3333333333%;
  }
  .offset-sm-5 {
    margin-left: 41.6666666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.3333333333%;
  }
  .offset-sm-8 {
    margin-left: 66.6666666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.3333333333%;
  }
  .offset-sm-11 {
    margin-left: 91.6666666667%;
  }
}

@media (min-width: 768px) {
  .col-md {
    -ms-flex-preferred-size: 0;
        flex-basis: 0;
    -webkit-box-flex: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }
  .col-md-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-md-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .col-md-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .col-md-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .col-md-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .col-md-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .col-md-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .col-md-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .col-md-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .col-md-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .col-md-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .col-md-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .col-md-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .order-md-first {
    -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
            order: -1;
  }
  .order-md-last {
    -webkit-box-ordinal-group: 14;
        -ms-flex-order: 13;
            order: 13;
  }
  .order-md-0 {
    -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
            order: 0;
  }
  .order-md-1 {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
  }
  .order-md-2 {
    -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
            order: 2;
  }
  .order-md-3 {
    -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
            order: 3;
  }
  .order-md-4 {
    -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
            order: 4;
  }
  .order-md-5 {
    -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
            order: 5;
  }
  .order-md-6 {
    -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
            order: 6;
  }
  .order-md-7 {
    -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
            order: 7;
  }
  .order-md-8 {
    -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
            order: 8;
  }
  .order-md-9 {
    -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
            order: 9;
  }
  .order-md-10 {
    -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
            order: 10;
  }
  .order-md-11 {
    -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
            order: 11;
  }
  .order-md-12 {
    -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
            order: 12;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.3333333333%;
  }
  .offset-md-2 {
    margin-left: 16.6666666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.3333333333%;
  }
  .offset-md-5 {
    margin-left: 41.6666666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.3333333333%;
  }
  .offset-md-8 {
    margin-left: 66.6666666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.3333333333%;
  }
  .offset-md-11 {
    margin-left: 91.6666666667%;
  }
}

@media (min-width: 992px) {
  .col-lg {
    -ms-flex-preferred-size: 0;
        flex-basis: 0;
    -webkit-box-flex: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }
  .col-lg-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-lg-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .col-lg-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .col-lg-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .col-lg-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .col-lg-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .col-lg-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .col-lg-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .col-lg-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .col-lg-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .col-lg-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .col-lg-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .col-lg-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .order-lg-first {
    -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
            order: -1;
  }
  .order-lg-last {
    -webkit-box-ordinal-group: 14;
        -ms-flex-order: 13;
            order: 13;
  }
  .order-lg-0 {
    -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
            order: 0;
  }
  .order-lg-1 {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
  }
  .order-lg-2 {
    -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
            order: 2;
  }
  .order-lg-3 {
    -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
            order: 3;
  }
  .order-lg-4 {
    -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
            order: 4;
  }
  .order-lg-5 {
    -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
            order: 5;
  }
  .order-lg-6 {
    -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
            order: 6;
  }
  .order-lg-7 {
    -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
            order: 7;
  }
  .order-lg-8 {
    -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
            order: 8;
  }
  .order-lg-9 {
    -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
            order: 9;
  }
  .order-lg-10 {
    -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
            order: 10;
  }
  .order-lg-11 {
    -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
            order: 11;
  }
  .order-lg-12 {
    -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
            order: 12;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.3333333333%;
  }
  .offset-lg-2 {
    margin-left: 16.6666666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.3333333333%;
  }
  .offset-lg-5 {
    margin-left: 41.6666666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.3333333333%;
  }
  .offset-lg-8 {
    margin-left: 66.6666666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.3333333333%;
  }
  .offset-lg-11 {
    margin-left: 91.6666666667%;
  }
}

@media (min-width: 1200px) {
  .col-xl {
    -ms-flex-preferred-size: 0;
        flex-basis: 0;
    -webkit-box-flex: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }
  .col-xl-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-xl-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .col-xl-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .col-xl-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .col-xl-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .col-xl-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .col-xl-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .col-xl-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .col-xl-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .col-xl-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .col-xl-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .col-xl-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .col-xl-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .order-xl-first {
    -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
            order: -1;
  }
  .order-xl-last {
    -webkit-box-ordinal-group: 14;
        -ms-flex-order: 13;
            order: 13;
  }
  .order-xl-0 {
    -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
            order: 0;
  }
  .order-xl-1 {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
  }
  .order-xl-2 {
    -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
            order: 2;
  }
  .order-xl-3 {
    -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
            order: 3;
  }
  .order-xl-4 {
    -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
            order: 4;
  }
  .order-xl-5 {
    -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
            order: 5;
  }
  .order-xl-6 {
    -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
            order: 6;
  }
  .order-xl-7 {
    -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
            order: 7;
  }
  .order-xl-8 {
    -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
            order: 8;
  }
  .order-xl-9 {
    -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
            order: 9;
  }
  .order-xl-10 {
    -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
            order: 10;
  }
  .order-xl-11 {
    -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
            order: 11;
  }
  .order-xl-12 {
    -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
            order: 12;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.3333333333%;
  }
  .offset-xl-2 {
    margin-left: 16.6666666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.3333333333%;
  }
  .offset-xl-5 {
    margin-left: 41.6666666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.3333333333%;
  }
  .offset-xl-8 {
    margin-left: 66.6666666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.3333333333%;
  }
  .offset-xl-11 {
    margin-left: 91.6666666667%;
  }
}

.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 1rem;
  background-color: transparent;
}

.table th,
.table td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}

.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}

.table tbody + tbody {
  border-top: 2px solid #dee2e6;
}

.table .table {
  background-color: #FFF;
}

.table-sm th,
.table-sm td {
  padding: 0.3rem;
}

.table-bordered {
  border: 1px solid #dee2e6;
}

.table-bordered th,
.table-bordered td {
  border: 1px solid #dee2e6;
}

.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05);
}

.table-hover tbody tr:hover {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #b8e2de;
}

.table-hover .table-primary:hover {
  background-color: #a6dbd6;
}

.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th {
  background-color: #a6dbd6;
}

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #d6d8db;
}

.table-hover .table-secondary:hover {
  background-color: #c8cbcf;
}

.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th {
  background-color: #c8cbcf;
}

.table-success,
.table-success > th,
.table-success > td {
  background-color: #c3e6cb;
}

.table-hover .table-success:hover {
  background-color: #b1dfbb;
}

.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
  background-color: #b1dfbb;
}

.table-info,
.table-info > th,
.table-info > td {
  background-color: #bee5eb;
}

.table-hover .table-info:hover {
  background-color: #abdde5;
}

.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
  background-color: #abdde5;
}

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #ffeeba;
}

.table-hover .table-warning:hover {
  background-color: #ffe8a1;
}

.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
  background-color: #ffe8a1;
}

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #f5c6cb;
}

.table-hover .table-danger:hover {
  background-color: #f1b0b7;
}

.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
  background-color: #f1b0b7;
}

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fdfdfe;
}

.table-hover .table-light:hover {
  background-color: #ececf6;
}

.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th {
  background-color: #ececf6;
}

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #c6c8ca;
}

.table-hover .table-dark:hover {
  background-color: #b9bbbe;
}

.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th {
  background-color: #b9bbbe;
}

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
  background-color: rgba(0, 0, 0, 0.075);
}

.table .thead-dark th {
  color: #FFF;
  background-color: #212529;
  border-color: #32383e;
}

.table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.table-dark {
  color: #FFF;
  background-color: #212529;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
  border-color: #32383e;
}

.table-dark.table-bordered {
  border: 0;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(255, 255, 255, 0.05);
}

.table-dark.table-hover tbody tr:hover {
  background-color: rgba(255, 255, 255, 0.075);
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-sm > .table-bordered {
    border: 0;
  }
}

@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-md > .table-bordered {
    border: 0;
  }
}

@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-lg > .table-bordered {
    border: 0;
  }
}

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-xl > .table-bordered {
    border: 0;
  }
}

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}

.table-responsive > .table-bordered {
  border: 0;
}

.form-control {
  display: block;
  width: 100%;
  padding: 0.375rem 0.75rem;
  font-size: 15px;
  line-height: 1.5;
  color: black;
  background-color: #f1f1f1;
  background-clip: padding-box;
  height: 45px;
  border: 1px solid #dadada;
  border-radius: .357rem;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
.control-label{
  font-weight: 600;
  color: black;
}
div.dataTables_wrapper div.dataTables_filter input {
  margin-left: 0.5em;
  display: inline-block;
  width: auto;
  height: 30px;
  font-weight: 600;
}
@media screen and (prefers-reduced-motion: reduce) {
  .form-control {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}

.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}

.form-control:focus {
  color: #495057;
  background-color: #FFF;
  border-color: rgb(0, 28, 64);
  outline: 0;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.form-control::-webkit-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control:-ms-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control::-ms-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control::placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control:disabled, .form-control[readonly] {
  background-color: #e9ecef;
  opacity: 1;
}

select.form-control:not([size]):not([multiple]) {
  height: 45px;
}

select.form-control:focus::-ms-value {
  color: #495057;
  background-color: #FFF;
}

.form-control-file,
.form-control-range {
  display: block;
  width: 100%;
}

.col-form-label {
  padding-top: calc(0.375rem + 2px);
  padding-bottom: calc(0.375rem + 2px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5;
}

.col-form-label-lg {
  padding-top: calc(0.5rem + 2px);
  padding-bottom: calc(0.5rem + 2px);
  font-size: 1.09375rem;
  line-height: 1.5;
}

.col-form-label-sm {
  padding-top: calc(0.25rem + 2px);
  padding-bottom: calc(0.25rem + 2px);
  font-size: 0.765625rem;
  line-height: 1.5;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  margin-bottom: 0;
  line-height: 1.5;
  color: #212529;
  background-color: transparent;
  border: solid transparent;
  border-width: 2px 0;
}

.form-control-plaintext.form-control-sm, .input-group-sm > .form-control-plaintext.form-control,
.input-group-sm > .input-group-prepend > .form-control-plaintext.input-group-text,
.input-group-sm > .input-group-append > .form-control-plaintext.input-group-text,
.input-group-sm > .input-group-prepend > .form-control-plaintext.btn,
.input-group-sm > .input-group-append > .form-control-plaintext.btn, .form-control-plaintext.form-control-lg, .input-group-lg > .form-control-plaintext.form-control,
.input-group-lg > .input-group-prepend > .form-control-plaintext.input-group-text,
.input-group-lg > .input-group-append > .form-control-plaintext.input-group-text,
.input-group-lg > .input-group-prepend > .form-control-plaintext.btn,
.input-group-lg > .input-group-append > .form-control-plaintext.btn {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm, .input-group-sm > .form-control,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.765625rem;
  line-height: 1.5;
  border-radius: 4px;
}

select.form-control-sm:not([size]):not([multiple]), .input-group-sm > select.form-control:not([size]):not([multiple]),
.input-group-sm > .input-group-prepend > select.input-group-text:not([size]):not([multiple]),
.input-group-sm > .input-group-append > select.input-group-text:not([size]):not([multiple]),
.input-group-sm > .input-group-prepend > select.btn:not([size]):not([multiple]),
.input-group-sm > .input-group-append > select.btn:not([size]):not([multiple]) {
  height: calc(1.6484375rem + 4px);
}

.form-control-lg, .input-group-lg > .form-control,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-append > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.09375rem;
  line-height: 1.5;
  border-radius: 4px;
}

select.form-control-lg:not([size]):not([multiple]), .input-group-lg > select.form-control:not([size]):not([multiple]),
.input-group-lg > .input-group-prepend > select.input-group-text:not([size]):not([multiple]),
.input-group-lg > .input-group-append > select.input-group-text:not([size]):not([multiple]),
.input-group-lg > .input-group-prepend > select.btn:not([size]):not([multiple]),
.input-group-lg > .input-group-append > select.btn:not([size]):not([multiple]) {
  height: calc(2.640625rem + 4px);
}

.form-group {
  margin-bottom: 1rem;
}

.form-text {
  display: block;
  margin-top: 0.25rem;
}

.form-row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px;
}

.form-row > .col,
.form-row > [class*="col-"] {
  padding-right: 5px;
  padding-left: 5px;
}

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem;
}

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem;
}

.form-check-input:disabled ~ .form-check-label {
  color: #6c757d;
}

.form-check-label {
  margin-bottom: 0;
}

.form-check-inline {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding-left: 0;
  margin-right: 0.75rem;
}

.form-check-inline .form-check-input {
  position: static;
  margin-top: 0;
  margin-right: 0.3125rem;
  margin-left: 0;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #28a745;
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #FFF;
  background-color: rgba(40, 167, 69, 0.8);
  border-radius: .2rem;
}

.was-validated .form-control:valid, .form-control.is-valid, .was-validated
.custom-select:valid,
.custom-select.is-valid {
  border-color: #28a745;
}

.was-validated .form-control:valid:focus, .form-control.is-valid:focus, .was-validated
.custom-select:valid:focus,
.custom-select.is-valid:focus {
  border-color: #28a745;
  -webkit-box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.25);
          box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.25);
}

.was-validated .form-control:valid ~ .valid-feedback,
.was-validated .form-control:valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback,
.form-control.is-valid ~ .valid-tooltip, .was-validated
.custom-select:valid ~ .valid-feedback,
.was-validated
.custom-select:valid ~ .valid-tooltip,
.custom-select.is-valid ~ .valid-feedback,
.custom-select.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-control-file:valid ~ .valid-feedback,
.was-validated .form-control-file:valid ~ .valid-tooltip, .form-control-file.is-valid ~ .valid-feedback,
.form-control-file.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #28a745;
}

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #28a745;
}

.was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
  background-color: #71dd8a;
}

.was-validated .custom-control-input:valid ~ .valid-feedback,
.was-validated .custom-control-input:valid ~ .valid-tooltip, .custom-control-input.is-valid ~ .valid-feedback,
.custom-control-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  background-color: #34ce57;
}

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  -webkit-box-shadow: 0 0 0 1px #FFF, 0 0 0 0 rgba(40, 167, 69, 0.25);
          box-shadow: 0 0 0 1px #FFF, 0 0 0 0 rgba(40, 167, 69, 0.25);
}

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #28a745;
}

.was-validated .custom-file-input:valid ~ .custom-file-label::before, .custom-file-input.is-valid ~ .custom-file-label::before {
  border-color: inherit;
}

.was-validated .custom-file-input:valid ~ .valid-feedback,
.was-validated .custom-file-input:valid ~ .valid-tooltip, .custom-file-input.is-valid ~ .valid-feedback,
.custom-file-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  -webkit-box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.25);
          box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.25);
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #dc3545;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #FFF;
  background-color: rgba(220, 53, 69, 0.8);
  border-radius: .2rem;
}

.was-validated .form-control:invalid, .form-control.is-invalid, .was-validated
.custom-select:invalid,
.custom-select.is-invalid {
  border-color: #dc3545;
}

.was-validated .form-control:invalid:focus, .form-control.is-invalid:focus, .was-validated
.custom-select:invalid:focus,
.custom-select.is-invalid:focus {
  border-color: #dc3545;
  -webkit-box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.25);
          box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.25);
}

.was-validated .form-control:invalid ~ .invalid-feedback,
.was-validated .form-control:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback,
.form-control.is-invalid ~ .invalid-tooltip, .was-validated
.custom-select:invalid ~ .invalid-feedback,
.was-validated
.custom-select:invalid ~ .invalid-tooltip,
.custom-select.is-invalid ~ .invalid-feedback,
.custom-select.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-control-file:invalid ~ .invalid-feedback,
.was-validated .form-control-file:invalid ~ .invalid-tooltip, .form-control-file.is-invalid ~ .invalid-feedback,
.form-control-file.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #dc3545;
}

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #dc3545;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
  background-color: #efa2a9;
}

.was-validated .custom-control-input:invalid ~ .invalid-feedback,
.was-validated .custom-control-input:invalid ~ .invalid-tooltip, .custom-control-input.is-invalid ~ .invalid-feedback,
.custom-control-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  background-color: #e4606d;
}

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  -webkit-box-shadow: 0 0 0 1px #FFF, 0 0 0 0 rgba(220, 53, 69, 0.25);
          box-shadow: 0 0 0 1px #FFF, 0 0 0 0 rgba(220, 53, 69, 0.25);
}

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #dc3545;
}

.was-validated .custom-file-input:invalid ~ .custom-file-label::before, .custom-file-input.is-invalid ~ .custom-file-label::before {
  border-color: inherit;
}

.was-validated .custom-file-input:invalid ~ .invalid-feedback,
.was-validated .custom-file-input:invalid ~ .invalid-tooltip, .custom-file-input.is-invalid ~ .invalid-feedback,
.custom-file-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  -webkit-box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.25);
          box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.25);
}

.form-inline {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-flow: row wrap;
          flex-flow: row wrap;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.app{
  min-height: calc(100vh - 50px);
  padding: 10px;
  margin-top: 30px;
  background-color: #f5f5f5;
  -webkit-transition: margin-left 0.3s ease;
  -o-transition: margin-left 0.3s ease;
  transition: margin-left 0.3s ease;
}
.form-inline .form-check {
  width: 100%;
}

@media (min-width: 576px) {
  .form-inline label {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    margin-bottom: 0;
  }
  .form-inline .form-group {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-flow: row wrap;
            flex-flow: row wrap;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    margin-bottom: 0;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-plaintext {
    display: inline-block;
  }
  .form-inline .input-group,
  .form-inline .custom-select {
    width: auto;
  }
  .form-inline .form-check {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    width: auto;
    padding-left: 0;
  }
  .form-inline .form-check-input {
    position: relative;
    margin-top: 0;
    margin-right: 0.25rem;
    margin-left: 0;
  }
  .form-inline .custom-control {
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .form-inline .custom-control-label {
    margin-bottom: 0;
  }
}

.btn {
  display: inline-block;
  font-weight: 500;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  border: 2px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: .357rem;
  -webkit-transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, -webkit-box-shadow 0.3s cubic-bezier(0.35, 0, 0.25, 1), -webkit-transform 0.2s cubic-bezier(0.35, 0, 0.25, 1);
  transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, -webkit-box-shadow 0.3s cubic-bezier(0.35, 0, 0.25, 1), -webkit-transform 0.2s cubic-bezier(0.35, 0, 0.25, 1);
  -o-transition: box-shadow 0.3s cubic-bezier(0.35, 0, 0.25, 1), transform 0.2s cubic-bezier(0.35, 0, 0.25, 1), background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
  transition: box-shadow 0.3s cubic-bezier(0.35, 0, 0.25, 1), transform 0.2s cubic-bezier(0.35, 0, 0.25, 1), background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
  transition: box-shadow 0.3s cubic-bezier(0.35, 0, 0.25, 1), transform 0.2s cubic-bezier(0.35, 0, 0.25, 1), background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, -webkit-box-shadow 0.3s cubic-bezier(0.35, 0, 0.25, 1), -webkit-transform 0.2s cubic-bezier(0.35, 0, 0.25, 1);
}

@media screen and (prefers-reduced-motion: reduce) {
  .btn {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}

.btn:hover, .btn:focus {
  text-decoration: none;
}

.btn:focus, .btn.focus {
  outline: 0;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn.disabled, .btn:disabled {
  opacity: 0.65;
}

.btn:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.btn:not(:disabled):not(.disabled):active, .btn:not(:disabled):not(.disabled).active {
  background-image: none;
}

a.btn.disabled,
fieldset:disabled a.btn {
  pointer-events: none;
}

.btn-primary {
  color: rgb(245 157 57);
  background-color: rgb(251 226 197);
  border-color: none;
  /* border-top-left-radius: 10px !important; */
  /* border-bottom-right-radius: 10px !important; */
  border-radius: .357rem;
  border: none;
  font-weight: 600;
}


.btn-save{
  background-color: rgb(166 236 171);
  color: rgb(1 123 10);
  /* width: 100px; */
  font-weight: 600;
  letter-spacing: 1px;
}
.btn-cancel{
  background-color: rgb(255 197 197);
  color: rgb(190, 40, 40);
  /* width: 100px; */
  font-weight: 600;
  letter-spacing: 1px;
}

.btn-primary.disabled, .btn-primary:disabled {
  color: #FFF;
  background-color: rgb(0, 28, 64);
  border-color:rgb(0, 28, 64);
}

.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle {
  color: #FFF;
  background-color: rgb(0, 28, 64);
  border-color: rgb(0, 28, 64);
}

.btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-primary.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgb(0, 28, 64);
          box-shadow: 0 0 0 0 rgb(0, 28, 64);
}

.btn-secondary {
  color: #FFF !important;
  background: rgb(0, 28, 64);
border: none !important;
  /* border-top-left-radius: 10px !important; */
  /* border-bottom-right-radius: 10px !important; */
  border-radius: .357rem;
}







.btn-success {
  color: #FFF;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-success:hover {
  color: #FFF;
  background-color: #218838;
  border-color: #1e7e34;
}

.btn-success:focus, .btn-success.focus {
  -webkit-box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.5);
          box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.5);
}

.btn-success.disabled, .btn-success:disabled {
  color: #FFF;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
.show > .btn-success.dropdown-toggle {
  color: #FFF;
  background-color: #1e7e34;
  border-color: #1c7430;
}

.btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-success.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.5);
          box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.5);
}

.btn-info {
  color: #FFF;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-info:hover {
  color: #FFF;
  background-color: #138496;
  border-color: #117a8b;
}

.btn-info:focus, .btn-info.focus {
  -webkit-box-shadow: 0 0 0 0 rgba(23, 162, 184, 0.5);
          box-shadow: 0 0 0 0 rgba(23, 162, 184, 0.5);
}

.btn-info.disabled, .btn-info:disabled {
  color: #FFF;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
.show > .btn-info.dropdown-toggle {
  color: #FFF;
  background-color: #117a8b;
  border-color: #10707f;
}

.btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-info.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(23, 162, 184, 0.5);
          box-shadow: 0 0 0 0 rgba(23, 162, 184, 0.5);
}

.btn-warning {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-warning:hover {
  color: #212529;
  background-color: #e0a800;
  border-color: #d39e00;
}

.btn-warning:focus, .btn-warning.focus {
  -webkit-box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.5);
          box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.5);
}

.btn-warning.disabled, .btn-warning:disabled {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
.show > .btn-warning.dropdown-toggle {
  color: #212529;
  background-color: #d39e00;
  border-color: #c69500;
}

.btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-warning.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.5);
          box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.5);
}

.btn-danger {
  color: #FFF;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-danger:hover {
  color: #FFF;
  background-color: #c82333;
  border-color: #bd2130;
}

.btn-danger:focus, .btn-danger.focus {
  -webkit-box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.5);
          box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.5);
}

.btn-danger.disabled, .btn-danger:disabled {
  color: #FFF;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
.show > .btn-danger.dropdown-toggle {
  color: #FFF;
  background-color: #bd2130;
  border-color: #b21f2d;
}

.btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-danger.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.5);
          box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.5);
}

.btn-light {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-light:hover {
  color: #212529;
  background-color: #e2e6ea;
  border-color: #dae0e5;
}

.btn-light:focus, .btn-light.focus {
  -webkit-box-shadow: 0 0 0 0 rgba(248, 249, 250, 0.5);
          box-shadow: 0 0 0 0 rgba(248, 249, 250, 0.5);
}

.btn-light.disabled, .btn-light:disabled {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
.show > .btn-light.dropdown-toggle {
  color: #212529;
  background-color: #dae0e5;
  border-color: #d3d9df;
}

.btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-light.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(248, 249, 250, 0.5);
          box-shadow: 0 0 0 0 rgba(248, 249, 250, 0.5);
}

.btn-dark {
  color: #FFF;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-dark:hover {
  color: #FFF;
  background-color: #23272b;
  border-color: #1d2124;
}

.btn-dark:focus, .btn-dark.focus {
  -webkit-box-shadow: 0 0 0 0 rgba(52, 58, 64, 0.5);
          box-shadow: 0 0 0 0 rgba(52, 58, 64, 0.5);
}

.btn-dark.disabled, .btn-dark:disabled {
  color: #FFF;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
.show > .btn-dark.dropdown-toggle {
  color: #FFF;
  background-color: #1d2124;
  border-color: #171a1d;
}

.btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-dark.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(52, 58, 64, 0.5);
          box-shadow: 0 0 0 0 rgba(52, 58, 64, 0.5);
}

.btn-outline-primary {
  color: rgb(0, 28, 64);
  background-color: transparent;
  background-image: none;
  border-color: rgb(0, 28, 64);
}

.btn-outline-primary:hover {
  color: #FFF;
  background-color: rgb(0, 28, 64);
  border-color: rgb(0, 28, 64);
}

.btn-outline-primary:focus, .btn-outline-primary.focus {
  -webkit-box-shadow: 0 0 0 0 rgba(0, 150, 136, 0.5);
          box-shadow: 0 0 0 0 rgba(0, 150, 136, 0.5);
}

.btn-outline-primary.disabled, .btn-outline-primary:disabled {
  color: rgb(0, 28, 64);
  background-color: transparent;
}

.btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
.show > .btn-outline-primary.dropdown-toggle {
  color: #FFF;
  background-color: rgb(0, 28, 64);
  border-color: rgb(0, 28, 64);
}

.btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-primary.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(0, 150, 136, 0.5);
          box-shadow: 0 0 0 0 rgba(0, 150, 136, 0.5);
}

.btn-outline-secondary {
  color: #6c757d;
  background-color: transparent;
  background-image: none;
  border-color: #6c757d;
}

.btn-outline-secondary:hover {
  color: #FFF;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-outline-secondary:focus, .btn-outline-secondary.focus {
  -webkit-box-shadow: 0 0 0 0 rgba(108, 117, 125, 0.5);
          box-shadow: 0 0 0 0 rgba(108, 117, 125, 0.5);
}

.btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
  color: #6c757d;
  background-color: transparent;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
.show > .btn-outline-secondary.dropdown-toggle {
  color: #FFF;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-secondary.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(108, 117, 125, 0.5);
          box-shadow: 0 0 0 0 rgba(108, 117, 125, 0.5);
}

.btn-outline-success {
  color: #28a745;
  background-color: transparent;
  background-image: none;
  border-color: #28a745;
}

.btn-outline-success:hover {
  color: #FFF;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-outline-success:focus, .btn-outline-success.focus {
  -webkit-box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.5);
          box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.5);
}

.btn-outline-success.disabled, .btn-outline-success:disabled {
  color: #28a745;
  background-color: transparent;
}

.btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
.show > .btn-outline-success.dropdown-toggle {
  color: #FFF;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-success.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.5);
          box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.5);
}

.btn-outline-info {
  color: #17a2b8;
  background-color: transparent;
  background-image: none;
  border-color: #17a2b8;
}

.btn-outline-info:hover {
  color: #FFF;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-outline-info:focus, .btn-outline-info.focus {
  -webkit-box-shadow: 0 0 0 0 rgba(23, 162, 184, 0.5);
          box-shadow: 0 0 0 0 rgba(23, 162, 184, 0.5);
}

.btn-outline-info.disabled, .btn-outline-info:disabled {
  color: #17a2b8;
  background-color: transparent;
}

.btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
.show > .btn-outline-info.dropdown-toggle {
  color: #FFF;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-info.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(23, 162, 184, 0.5);
          box-shadow: 0 0 0 0 rgba(23, 162, 184, 0.5);
}

.btn-outline-warning {
  color: #ffc107;
  background-color: transparent;
  background-image: none;
  border-color: #ffc107;
}

.btn-outline-warning:hover {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-outline-warning:focus, .btn-outline-warning.focus {
  -webkit-box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.5);
          box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.5);
}

.btn-outline-warning.disabled, .btn-outline-warning:disabled {
  color: #ffc107;
  background-color: transparent;
}

.btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
.show > .btn-outline-warning.dropdown-toggle {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-warning.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.5);
          box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.5);
}

.btn-outline-danger {
  color: #dc3545;
  background-color: transparent;
  background-image: none;
  border-color: #dc3545;
}

.btn-outline-danger:hover {
  color: #FFF;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-outline-danger:focus, .btn-outline-danger.focus {
  -webkit-box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.5);
          box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.5);
}

.btn-outline-danger.disabled, .btn-outline-danger:disabled {
  color: #dc3545;
  background-color: transparent;
}

.btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
.show > .btn-outline-danger.dropdown-toggle {
  color: #FFF;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-danger.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.5);
          box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.5);
}

.btn-outline-light {
  color: #f8f9fa;
  background-color: transparent;
  background-image: none;
  border-color: #f8f9fa;
}

.btn-outline-light:hover {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}
.swal-modal {
  opacity: 0;
  pointer-events: none;
  background-color: #fff;
  text-align: center;
  border-radius: .357rem;
  position: static;
  margin: 20px auto;
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: scale(1);
  transform: scale(1);
  -webkit-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  z-index: 10001;
  /* border-top: 5px solid rgb(0, 28, 64); */
  transition: opacity .2s,-webkit-transform .3s;
  transition: transform .3s,opacity .2s;
  transition: transform .3s,opacity .2s,-webkit-transform .3s;
}
.swal-overlay {

  background-color: rgba(0, 0, 0, 0.781);
 
}
.swal-text {
  color: black;
  text-align: center;
  font-weight: 500;
  font-size: 15px !important;
}
.btn-outline-light:focus, .btn-outline-light.focus {
  -webkit-box-shadow: 0 0 0 0 rgba(248, 249, 250, 0.5);
          box-shadow: 0 0 0 0 rgba(248, 249, 250, 0.5);
}

.btn-outline-light.disabled, .btn-outline-light:disabled {
  color: #f8f9fa;
  background-color: transparent;
}

.btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
.show > .btn-outline-light.dropdown-toggle {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-light.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(248, 249, 250, 0.5);
          box-shadow: 0 0 0 0 rgba(248, 249, 250, 0.5);
}

.btn-outline-dark {
  color: #343a40;
  background-color: transparent;
  background-image: none;
  border-color: #343a40;
}

.btn-outline-dark:hover {
  color: #FFF;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-outline-dark:focus, .btn-outline-dark.focus {
  -webkit-box-shadow: 0 0 0 0 rgba(52, 58, 64, 0.5);
          box-shadow: 0 0 0 0 rgba(52, 58, 64, 0.5);
}

.btn-outline-dark.disabled, .btn-outline-dark:disabled {
  color: #343a40;
  background-color: transparent;
}

.btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
.show > .btn-outline-dark.dropdown-toggle {
  color: #FFF;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-dark.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(52, 58, 64, 0.5);
          box-shadow: 0 0 0 0 rgba(52, 58, 64, 0.5);
}

.btn-link {
  font-weight: 400;
  color: rgb(0, 28, 64);
  background-color: transparent;
}

.btn-link:hover {
  color: #004a43;
  text-decoration: underline;
  background-color: transparent;
  border-color: transparent;
}

.btn-link:focus, .btn-link.focus {
  text-decoration: underline;
  border-color: transparent;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-link:disabled, .btn-link.disabled {
  color: #6c757d;
  pointer-events: none;
}

.btn-lg, .btn-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.09375rem;
  line-height: 1.5;
  border-radius: .357rem;
}

.btn-sm, .btn-group-sm > .btn {
  padding: 5px;
  font-size: 13px;
  line-height: 1.5;
  padding-left: 10px;
  border-radius: .357rem;
  padding-right: 10px;
  font-weight: 500;
}
.pdf-file{
  background: #efcaca  !important;
  color: #bf0000  !important;
}
.print-file{
  background: #bfbeef!important;
  color: #03009a!important;
}
.btn-block {
  display: block;
  width: 100%;
}

.btn-block + .btn-block {
  margin-top: 0.5rem;
}

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}

.fade {
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}

@media screen and (prefers-reduced-motion: reduce) {
  .fade {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}

.fade:not(.show) {
  opacity: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.35s ease;
  -o-transition: height 0.35s ease;
  transition: height 0.35s ease;
}

@media screen and (prefers-reduced-motion: reduce) {
  .collapsing {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}

.dropup,
.dropright,
.dropdown,
.dropleft {
  position: relative;
}

.dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}

.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  min-width: 10rem;
  padding: 0 0;
  margin: 0 0 0;
  font-size: 15px;
  color: black;
  text-align: left;
  list-style: none;
  background-color: #FFF;
  background-clip: padding-box;
  border: 0 solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
}

.dropdown-menu-right {
  right: 0;
  left: auto;
}

.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0;
}

.dropup .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}

.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0;
}

.dropright .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}

.dropright .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-toggle::after {
  vertical-align: 0;
}

.dropleft .dropdown-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0;
}

.dropleft .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}

.dropleft .dropdown-toggle::after {
  display: none;
}

.dropleft .dropdown-toggle::before {
  display: inline-block;
  width: 0;
  height: 0;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}

.dropleft .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropleft .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
  right: auto;
  bottom: auto;
}

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #e9ecef;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: 8px 20px;
  clear: both;
  font-weight: 600;
  color: black;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
  text-align: center;
  border-radius: .375rem;
  box-shadow: 1px 1px 5px #0000006b;
}



.dropdown-item:hover, .dropdown-item:focus {
  color: #16181b;
  text-decoration: none;
  background-color: #f8f9fa;
}

.dropdown-item.active, .dropdown-item:active {
  color: #FFF;
  text-decoration: none;
  background-color: rgb(0, 28, 64);
}

.dropdown-item.disabled, .dropdown-item:disabled {
  color: #6c757d;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: 0 20px;
  margin-bottom: 0;
  font-size: 0.765625rem;
  color: #6c757d;
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: 8px 20px;
  color: #212529;
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle;
  text-transform: uppercase;
}

.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  -webkit-box-flex: 0;
      -ms-flex: 0 1 auto;
          flex: 0 1 auto;
}

.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover {
  z-index: 1;
}

.btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active {
  z-index: 1;
}

.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group,
.btn-group-vertical .btn + .btn,
.btn-group-vertical .btn + .btn-group,
.btn-group-vertical .btn-group + .btn,
.btn-group-vertical .btn-group + .btn-group {
  margin-left: -2px;
}

.btn-toolbar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
}

.btn-toolbar .input-group {
  width: auto;
}

.btn-group > .btn:first-child {
  margin-left: 0;
}

.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 0.5625rem;
  padding-left: 0.5625rem;
}

.dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after,
.dropright .dropdown-toggle-split::after {
  margin-left: 0;
}

.dropleft .dropdown-toggle-split::before {
  margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.375rem;
  padding-left: 0.375rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem;
}

.btn-group-vertical {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.btn-group-vertical .btn,
.btn-group-vertical .btn-group {
  width: 100%;
}

.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -2px;
  margin-left: 0;
}

.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
  margin-bottom: 0;
}

.btn-group-toggle > .btn input[type="radio"],
.btn-group-toggle > .btn input[type="checkbox"],
.btn-group-toggle > .btn-group > .btn input[type="radio"],
.btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}

.input-group {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-align: stretch;
      -ms-flex-align: stretch;
          align-items: stretch;
  width: 100%;
}

.input-group > .form-control,
.input-group > .custom-select,
.input-group > .custom-file {
  position: relative;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  width: 1%;
  margin-bottom: 0;
}

.input-group > .form-control:focus,
.input-group > .custom-select:focus,
.input-group > .custom-file:focus {
  z-index: 3;
}

.input-group > .form-control + .form-control,
.input-group > .form-control + .custom-select,
.input-group > .form-control + .custom-file,
.input-group > .custom-select + .form-control,
.input-group > .custom-select + .custom-select,
.input-group > .custom-select + .custom-file,
.input-group > .custom-file + .form-control,
.input-group > .custom-file + .custom-select,
.input-group > .custom-file + .custom-file {
  margin-left: -2px;
}

.input-group > .form-control:not(:last-child),
.input-group > .custom-select:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .form-control:not(:first-child),
.input-group > .custom-select:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group > .custom-file {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.input-group > .custom-file:not(:last-child) .custom-file-label,
.input-group > .custom-file:not(:last-child) .custom-file-label::after {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .custom-file:not(:first-child) .custom-file-label {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group-prepend,
.input-group-append {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.input-group-prepend .btn,
.input-group-append .btn {
  position: relative;
  z-index: 2;
}

.input-group-prepend .btn + .btn,
.input-group-prepend .btn + .input-group-text,
.input-group-prepend .input-group-text + .input-group-text,
.input-group-prepend .input-group-text + .btn,
.input-group-append .btn + .btn,
.input-group-append .btn + .input-group-text,
.input-group-append .input-group-text + .input-group-text,
.input-group-append .input-group-text + .btn {
  margin-left: -2px;
}

.input-group-prepend {
  margin-right: -2px;
}

.input-group-append {
  margin-left: -2px;
}

.input-group-text {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 0.375rem 0.75rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 2px solid #ced4da;
  border-radius: 4px;
}

.input-group-text input[type="radio"],
.input-group-text input[type="checkbox"] {
  margin-top: 0;
}

.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.custom-control {
  position: relative;
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5rem;
}

.custom-control-inline {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  margin-right: 1rem;
}

.custom-control-input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}

.custom-control-input:checked ~ .custom-control-label::before {
  color: #FFF;
  background-color: rgb(0, 28, 64);
}

.custom-control-input:focus ~ .custom-control-label::before {
  -webkit-box-shadow: 0 0 0 1px #FFF, none;
          box-shadow: 0 0 0 1px #FFF, none;
}

.custom-control-input:active ~ .custom-control-label::before {
  color: #FFF;
  background-color: #4affee;
}

.custom-control-input:disabled ~ .custom-control-label {
  color: #6c757d;
}

.custom-control-input:disabled ~ .custom-control-label::before {
  background-color: #e9ecef;
}

.custom-control-label {
  position: relative;
  margin-bottom: 0;
}

.custom-control-label::before {
  position: absolute;
  top: 0.25rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  pointer-events: none;
  content: "";
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-color: #dee2e6;
}

.custom-control-label::after {
  position: absolute;
  top: 0.25rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  content: "";
  background-repeat: no-repeat;
  background-position: center center;
  background-size: 50% 50%;
}

.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
  background-color: rgb(0, 28, 64);
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23FFF' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  background-color: rgb(0, 28, 64);
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23FFF' d='M0 2h4'/%3E%3C/svg%3E");
}

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 150, 136, 0.5);
}

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(0, 150, 136, 0.5);
}

.custom-radio .custom-control-label::before {
  border-radius: .357rem;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::before {
  background-color: rgb(0, 28, 64);
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23FFF'/%3E%3C/svg%3E");
}

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 150, 136, 0.5);
}

.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(2.0625rem + 4px);
  padding: 0.375rem 1.75rem 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: #FFF url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center;
  background-size: 8px 10px;
  border: 2px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}

.custom-select:focus {
  border-color: rgb(0, 28, 64);
  outline: 0;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 5px rgba(0, 150, 136, 0.5);
          box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 5px rgba(0, 150, 136, 0.5);
}

.custom-select:focus::-ms-value {
  color: #495057;
  background-color: #FFF;
}

.custom-select[multiple], .custom-select[size]:not([size="1"]) {
  height: auto;
  padding-right: 0.75rem;
  background-image: none;
}

.custom-select:disabled {
  color: #6c757d;
  background-color: #e9ecef;
}

.custom-select::-ms-expand {
  opacity: 0;
}

.custom-select-sm {
  height: calc(1.6484375rem + 4px);
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  font-size: 75%;
}

.custom-select-lg {
  height: calc(2.640625rem + 4px);
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  font-size: 125%;
}

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(2.0625rem + 4px);
  margin-bottom: 0;
}

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(2.0625rem + 4px);
  margin: 0;
  opacity: 0;
}

.custom-file-input:focus ~ .custom-file-label {
  border-color: rgb(0, 28, 64);
  -webkit-box-shadow: none;
          box-shadow: none;
}

.custom-file-input:focus ~ .custom-file-label::after {
  border-color: rgb(0, 28, 64);
}

.custom-file-input:lang(en) ~ .custom-file-label::after {
  content: "Browse";
}

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(2.0625rem + 4px);
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  background-color: #FFF;
  border: 2px solid #ced4da;
  border-radius: 4px;
}

.custom-file-label::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  display: block;
  height: 2.0625rem;
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  content: "Browse";
  background-color: #e9ecef;
  border-left: 2px solid #ced4da;
  border-radius: 0 4px 4px 0;
}

.custom-range {
  width: 100%;
  padding-left: 0;
  background-color: transparent;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}

.custom-range:focus {
  outline: none;
}

.custom-range::-moz-focus-outer {
  border: 0;
}

.custom-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: rgb(0, 28, 64);
  border: 0;
  border-radius: 1rem;
  -webkit-appearance: none;
          appearance: none;
}

.custom-range::-webkit-slider-thumb:focus {
  outline: none;
  -webkit-box-shadow: 0 0 0 1px #FFF, none;
          box-shadow: 0 0 0 1px #FFF, none;
}

.custom-range::-webkit-slider-thumb:active {
  background-color: #4affee;
}

.custom-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.custom-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: rgb(0, 28, 64);
  border: 0;
  border-radius: 1rem;
  -moz-appearance: none;
       appearance: none;
}

.custom-range::-moz-range-thumb:focus {
  outline: none;
  box-shadow: 0 0 0 1px #FFF, none;
}

.custom-range::-moz-range-thumb:active {
  background-color: #4affee;
}

.custom-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.custom-range::-ms-thumb {
  width: 1rem;
  height: 1rem;
  background-color: rgb(0, 28, 64);
  border: 0;
  border-radius: 1rem;
  appearance: none;
}

.custom-range::-ms-thumb:focus {
  outline: none;
  box-shadow: 0 0 0 1px #FFF, none;
}

.custom-range::-ms-thumb:active {
  background-color: #4affee;
}

.custom-range::-ms-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: transparent;
  border-color: transparent;
  border-width: 0.5rem;
}

.custom-range::-ms-fill-lower {
  background-color: #dee2e6;
  border-radius: 1rem;
}

.custom-range::-ms-fill-upper {
  margin-right: 15px;
  background-color: #dee2e6;
  border-radius: 1rem;
}

.nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: 0.5rem 1rem;
}

.nav-link:hover, .nav-link:focus {
  text-decoration: none;
}

.nav-link.disabled {
  color: #6c757d;
}

.nav-tabs {
  border-bottom: 1px solid #dee2e6;
}

.nav-tabs .nav-item {
  margin-bottom: -1px;
}

.nav-tabs .nav-link {
  border: 1px solid transparent;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  border-color: #e9ecef #e9ecef #dee2e6;
}

.nav-tabs .nav-link.disabled {
  color: #6c757d;
  background-color: transparent;
  border-color: transparent;
}

.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: #495057;
  background-color: #FFF;
  border-color: #dee2e6 #dee2e6 #FFF;
}

.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills .nav-link {
  border-radius: 0.25rem;
}

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #FFF;
  background-color: rgb(0, 28, 64);
}

.nav-fill .nav-item {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  text-align: center;
}

.nav-justified .nav-item {
  -ms-flex-preferred-size: 0;
      flex-basis: 0;
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  text-align: center;
}

.tab-content > .tab-pane {
  display: none;
}

.tab-content > .active {
  display: block;
}

.navbar {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 0.5rem 1rem;
}

.navbar > .container,
.navbar > .container-fluid {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.navbar-brand {
  display: inline-block;
  padding-top: 0.3359375rem;
  padding-bottom: 0.3359375rem;
  margin-right: 1rem;
  font-size: 1.09375rem;
  line-height: inherit;
  white-space: nowrap;
}

.navbar-brand:hover, .navbar-brand:focus {
  text-decoration: none;
}

.navbar-nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}

.navbar-nav .dropdown-menu {
  position: static;
  float: none;
}

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.navbar-collapse {
  -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.09375rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: .357rem;
}

.navbar-toggler:hover, .navbar-toggler:focus {
  text-decoration: none;
}

.navbar-toggler:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%;
}

@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
  }
  .navbar-expand-sm .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
        flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
}

@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 768px) {
  .navbar-expand-md {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
  }
  .navbar-expand-md .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
        flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
}

@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 992px) {
  .navbar-expand-lg {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
  }
  .navbar-expand-lg .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
        flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
}

@media (max-width: 1199.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 1200px) {
  .navbar-expand-xl {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
  }
  .navbar-expand-xl .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
        flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
}

.navbar-expand {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-flow: row nowrap;
          flex-flow: row nowrap;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
}

.navbar-expand > .container,
.navbar-expand > .container-fluid {
  padding-right: 0;
  padding-left: 0;
}

.navbar-expand .navbar-nav {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
}

.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}

.navbar-expand .navbar-nav .nav-link {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}

.navbar-expand > .container,
.navbar-expand > .container-fluid {
  -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
}

.navbar-expand .navbar-collapse {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important;
  -ms-flex-preferred-size: auto;
      flex-basis: auto;
}

.navbar-expand .navbar-toggler {
  display: none;
}

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
  color: rgba(0, 0, 0, 0.7);
}

.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(0, 0, 0, 0.3);
}

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1);
}

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-text a {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-dark .navbar-brand {
  color: #FFF;
}

.navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
  color: #FFF;
}

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}

.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #FFF;
}

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1);
}

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-text a {
  color: #FFF;
}

.navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
  color: #FFF;
}

.card {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #FFF;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
}

.card > hr {
  margin-right: 0;
  margin-left: 0;
}

.card > .list-group:first-child .list-group-item:first-child {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.card > .list-group:last-child .list-group-item:last-child {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.card-body {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  padding: 1.25rem;
}

.card-title {
  margin-bottom: 0.75rem;
}

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link:hover {
  text-decoration: none;
}

.card-link + .card-link {
  margin-left: 1.25rem;
}

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}

.card-header:first-child {
  border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-header + .list-group .list-group-item:first-child {
  border-top: 0;
}

.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125);
}

.card-footer:last-child {
  border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0;
}

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem;
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem;
}

.card-img {
  width: 100%;
  border-radius: calc(0.25rem - 1px);
}

.card-img-top {
  width: 100%;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.card-img-bottom {
  width: 100%;
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

.card-deck {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.card-deck .card {
  margin-bottom: 15px;
}

@media (min-width: 576px) {
  .card-deck {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-flow: row wrap;
            flex-flow: row wrap;
    margin-right: -15px;
    margin-left: -15px;
  }
  .card-deck .card {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
            flex: 1 0 0%;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    margin-right: 15px;
    margin-bottom: 0;
    margin-left: 15px;
  }
}

.card-group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.card-group > .card {
  margin-bottom: 15px;
}

@media (min-width: 576px) {
  .card-group {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-flow: row wrap;
            flex-flow: row wrap;
  }
  .card-group > .card {
    -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
            flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:first-child {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:first-child .card-img-top,
  .card-group > .card:first-child .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:first-child .card-img-bottom,
  .card-group > .card:first-child .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:last-child {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:last-child .card-img-top,
  .card-group > .card:last-child .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:last-child .card-img-bottom,
  .card-group > .card:last-child .card-footer {
    border-bottom-left-radius: 0;
  }
  .card-group > .card:only-child {
    border-radius: 0.25rem;
  }
  .card-group > .card:only-child .card-img-top,
  .card-group > .card:only-child .card-header {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
  }
  .card-group > .card:only-child .card-img-bottom,
  .card-group > .card:only-child .card-footer {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
  }
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) {
    border-radius: 0;
  }
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header,
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
    border-radius: 0;
  }
}

.card-columns .card {
  margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
  .card-columns {
    -webkit-column-count: 3;
            column-count: 3;
    -webkit-column-gap: 1.25rem;
            column-gap: 1.25rem;
    orphans: 1;
    widows: 1;
  }
  .card-columns .card {
    display: inline-block;
    width: 100%;
  }
}

.accordion .card:not(:first-of-type):not(:last-of-type) {
  border-bottom: 0;
  border-radius: 0;
}

.accordion .card:not(:first-of-type) .card-header:first-child {
  border-radius: 0;
}

.accordion .card:first-of-type {
  border-bottom: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.accordion .card:last-of-type {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.breadcrumb {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  padding: 0.75rem 1rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: #e9ecef;
  border-radius: 0.25rem;
}

.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem;
}

.breadcrumb-item + .breadcrumb-item::before {
  display: inline-block;
  padding-right: 0.5rem;
  color: #6c757d;
  content: "/";
}

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: underline;
}

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: none;
}

.breadcrumb-item.active {
  color: #6c757d;
}

.pagination {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem;
}

.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: rgb(0, 28, 64);
  background-color: #FFF;
  border: 1px solid #dee2e6;
}

.page-link:hover {
  z-index: 2;
  color: #004a43;
  text-decoration: none;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.page-link:focus {
  z-index: 2;
  outline: 0;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.page-link:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.page-item.active .page-link {
  z-index: 1;
  color: #FFF;
  background-color: rgb(0, 28, 64);
  border-color: rgb(0, 28, 64);
}

.page-item.disabled .page-link {
  color: #6c757d;
  pointer-events: none;
  cursor: auto;
  background-color: #FFF;
  border-color: #dee2e6;
}

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.09375rem;
  line-height: 1.5;
}

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.765625rem;
  line-height: 1.5;
}

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}

.badge {
  display: inline-block;
  padding: 7px;
  font-size: 12px;
  font-weight: 500;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem;
  color: white;
}

.badge:empty {
  display: none;
}

.btn .badge {
  position: relative;
  top: -1px;
}

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem;
}

.badge-primary {
  color: #FFF;
  background-color: rgb(0, 28, 64);
}

.badge-primary[href]:hover, .badge-primary[href]:focus {
  color: #FFF;
  text-decoration: none;
  background-color: #00635a;
}

.badge-secondary {
  color: #FFF;
  background-color: #6c757d;
}

.badge-secondary[href]:hover, .badge-secondary[href]:focus {
  color: #FFF;
  text-decoration: none;
  background-color: #545b62;
}

.badge-success {
  color: #FFF;
  background-color: #28a745;
}

.badge-success[href]:hover, .badge-success[href]:focus {
  color: #FFF;
  text-decoration: none;
  background-color: #1e7e34;
}

.badge-info {
  color: #FFF;
  background-color: #17a2b8;
}

.badge-info[href]:hover, .badge-info[href]:focus {
  color: #FFF;
  text-decoration: none;
  background-color: #117a8b;
}

.badge-warning {
  color: #212529;
  background-color: #ffc107;
}

.badge-warning[href]:hover, .badge-warning[href]:focus {
  color: #212529;
  text-decoration: none;
  background-color: #d39e00;
}

.badge-danger {
  color: #FFF;
  background-color: #dc3545;
}

.badge-danger[href]:hover, .badge-danger[href]:focus {
  color: #FFF;
  text-decoration: none;
  background-color: #bd2130;
}

.badge-light {
  color: #212529;
  background-color: #f8f9fa;
}

.badge-light[href]:hover, .badge-light[href]:focus {
  color: #212529;
  text-decoration: none;
  background-color: #dae0e5;
}

.badge-dark {
  color: #FFF;
  background-color: #343a40;
}

.badge-dark[href]:hover, .badge-dark[href]:focus {
  color: #FFF;
  text-decoration: none;
  background-color: #1d2124;
}

.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
  border-radius: 0.3rem;
}

@media (min-width: 576px) {
  .jumbotron {
    padding: 4rem 2rem;
  }
}

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0;
}

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 700;
}

.alert-dismissible {
  padding-right: 3.8125rem;
}

.alert-dismissible .close {
  position: absolute;
  top: 0;
  right: 0;
  padding: 0.75rem 1.25rem;
  color: inherit;
}

.alert-primary {
  color: #004e47;
  background-color: #cceae7;
  border-color: #b8e2de;
}

.alert-primary hr {
  border-top-color: #a6dbd6;
}

.alert-primary .alert-link {
  color: #001b19;
}

.alert-secondary {
  color: #383d41;
  background-color: #e2e3e5;
  border-color: #d6d8db;
}

.alert-secondary hr {
  border-top-color: #c8cbcf;
}

.alert-secondary .alert-link {
  color: #202326;
}

.alert-success {
  color: #155724;
  background-color: #d4edda;
  border-color: #c3e6cb;
}

.alert-success hr {
  border-top-color: #b1dfbb;
}

.alert-success .alert-link {
  color: #0b2e13;
}

.alert-info {
  color: #0c5460;
  background-color: #d1ecf1;
  border-color: #bee5eb;
}

.alert-info hr {
  border-top-color: #abdde5;
}

.alert-info .alert-link {
  color: #062c33;
}

.alert-warning {
  color: #856404;
  background-color: #fff3cd;
  border-color: #ffeeba;
}

.alert-warning hr {
  border-top-color: #ffe8a1;
}

.alert-warning .alert-link {
  color: #533f03;
}

.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb;
}

.alert-danger hr {
  border-top-color: #f1b0b7;
}

.alert-danger .alert-link {
  color: #491217;
}

.alert-light {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe;
}

.alert-light hr {
  border-top-color: #ececf6;
}

.alert-light .alert-link {
  color: #686868;
}

.alert-dark {
  color: #1b1e21;
  background-color: #d6d8d9;
  border-color: #c6c8ca;
}

.alert-dark hr {
  border-top-color: #b9bbbe;
}

.alert-dark .alert-link {
  color: #040505;
}

@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}

.progress {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.65625rem;
  background-color: #e9ecef;
  border-radius: 0.25rem;
}

.progress-bar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  color: #FFF;
  text-align: center;
  white-space: nowrap;
  background-color: rgb(0, 28, 64);
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease;
}

@media screen and (prefers-reduced-motion: reduce) {
  .progress-bar {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}

.progress-bar-striped {
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem;
}

.progress-bar-animated {
  -webkit-animation: progress-bar-stripes 1s linear infinite;
          animation: progress-bar-stripes 1s linear infinite;
}

.media {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
}

.media-body {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.list-group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
}

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit;
}

.list-group-item-action:hover, .list-group-item-action:focus {
  color: #495057;
  text-decoration: none;
  background-color: #f8f9fa;
}

.list-group-item-action:active {
  color: #212529;
  background-color: #e9ecef;
}

.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  margin-bottom: -1px;
  background-color: #FFF;
  border: 1px solid rgba(0, 0, 0, 0.125);
}

.list-group-item:first-child {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.list-group-item:hover, .list-group-item:focus {
  z-index: 1;
  text-decoration: none;
}

.list-group-item.disabled, .list-group-item:disabled {
  color: #6c757d;
  background-color: #FFF;
}

.list-group-item.active {
  z-index: 2;
  color: #FFF;
  background-color: rgb(0, 28, 64);
  border-color: rgb(0, 28, 64);
}

.list-group-flush .list-group-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}

.list-group-flush:first-child .list-group-item:first-child {
  border-top: 0;
}

.list-group-flush:last-child .list-group-item:last-child {
  border-bottom: 0;
}

.list-group-item-primary {
  color: #004e47;
  background-color: #b8e2de;
}

.list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
  color: #004e47;
  background-color: #a6dbd6;
}

.list-group-item-primary.list-group-item-action.active {
  color: #FFF;
  background-color: #004e47;
  border-color: #004e47;
}

.list-group-item-secondary {
  color: #383d41;
  background-color: #d6d8db;
}

.list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
  color: #383d41;
  background-color: #c8cbcf;
}

.list-group-item-secondary.list-group-item-action.active {
  color: #FFF;
  background-color: #383d41;
  border-color: #383d41;
}

.list-group-item-success {
  color: #155724;
  background-color: #c3e6cb;
}

.list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
  color: #155724;
  background-color: #b1dfbb;
}

.list-group-item-success.list-group-item-action.active {
  color: #FFF;
  background-color: #155724;
  border-color: #155724;
}

.list-group-item-info {
  color: #0c5460;
  background-color: #bee5eb;
}

.list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
  color: #0c5460;
  background-color: #abdde5;
}

.list-group-item-info.list-group-item-action.active {
  color: #FFF;
  background-color: #0c5460;
  border-color: #0c5460;
}

.list-group-item-warning {
  color: #856404;
  background-color: #ffeeba;
}

.list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
  color: #856404;
  background-color: #ffe8a1;
}

.list-group-item-warning.list-group-item-action.active {
  color: #FFF;
  background-color: #856404;
  border-color: #856404;
}

.list-group-item-danger {
  color: #721c24;
  background-color: #f5c6cb;
}

.list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
  color: #721c24;
  background-color: #f1b0b7;
}

.list-group-item-danger.list-group-item-action.active {
  color: #FFF;
  background-color: #721c24;
  border-color: #721c24;
}

.list-group-item-light {
  color: #818182;
  background-color: #fdfdfe;
}

.list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
  color: #818182;
  background-color: #ececf6;
}

.list-group-item-light.list-group-item-action.active {
  color: #FFF;
  background-color: #818182;
  border-color: #818182;
}

.list-group-item-dark {
  color: #1b1e21;
  background-color: #c6c8ca;
}

.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
  color: #1b1e21;
  background-color: #b9bbbe;
}

.list-group-item-dark.list-group-item-action.active {
  color: #FFF;
  background-color: #1b1e21;
  border-color: #1b1e21;
}

.close {
  float: right;
  font-size: 1.3125rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #FFF;
  opacity: .5;
}

.close:hover, .close:focus {
  color: #000;
  text-decoration: none;
  opacity: .75;
}

.close:not(:disabled):not(.disabled) {
  cursor: pointer;
}

button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
  -webkit-appearance: none;
}

.modal-open {
  overflow: hidden;
}

.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  outline: 0;
}

.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none;
}

.modal.fade .modal-dialog {
  -webkit-transition: -webkit-transform 0.3s ease-out;
  transition: -webkit-transform 0.3s ease-out;
  -o-transition: transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
  transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
  -webkit-transform: translate(0, -25%);
      -ms-transform: translate(0, -25%);
          transform: translate(0, -25%);
}

@media screen and (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}

.modal.show .modal-dialog {
  -webkit-transform: translate(0, 0);
      -ms-transform: translate(0, 0);
          transform: translate(0, 0);
}

.modal-dialog-centered {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  min-height: calc(100% - (0.5rem * 2));
}

.modal-content {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #FFF;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  outline: 0;
}

.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 0;
  background-color: #000;
}

.modal-backdrop.fade {
  opacity: 0;
}

.modal-backdrop.show {
  opacity: 0.5;
}

.modal-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 1rem;
  border-radius: .357rem;
}

.modal-header .close {
  padding: 8px;
  margin: 0px 0px 0px auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.modal-body {
  position: relative;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  padding: 1rem;
}

.modal-footer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  padding: 1rem;
  border-radius: .357rem;
}

.modal-footer > :not(:first-child) {
  margin-left: .25rem;
}

.modal-footer > :not(:last-child) {
  margin-right: .25rem;
}

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto;
  }
  .modal-dialog-centered {
    min-height: calc(100% - (1.75rem * 2));
  }
  .modal-sm {
    max-width: 300px;
  }
}

@media (min-width: 992px) {
  .modal-lg {
    max-width: 800px;
  }
}

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: 'Roboto', sans-serif;
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.765625rem;
  word-wrap: break-word;
  opacity: 0;
}

.tooltip.show {
  opacity: 0.9;
}

.tooltip .arrow {
  position: absolute;
  display: block;
  width: 0.8rem;
  height: 0.4rem;
}

.tooltip .arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
  padding: 0.4rem 0;
}

.bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
  bottom: 0;
}

.bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
  top: 0;
  border-width: 0.4rem 0.4rem 0;
  border-top-color: #000;
}

.bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
  padding: 0 0.4rem;
}

.bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
  left: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
  right: 0;
  border-width: 0.4rem 0.4rem 0.4rem 0;
  border-right-color: #000;
}

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
  padding: 0.4rem 0;
}

.bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
  top: 0;
}

.bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  bottom: 0;
  border-width: 0 0.4rem 0.4rem;
  border-bottom-color: #000;
}

.bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
  padding: 0 0.4rem;
}

.bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
  right: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
  left: 0;
  border-width: 0.4rem 0 0.4rem 0.4rem;
  border-left-color: #000;
}

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #FFF;
  text-align: center;
  background-color: #000;
  border-radius: 0.25rem;
}

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: 'Roboto', sans-serif;
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.765625rem;
  word-wrap: break-word;
  background-color: #FFF;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
}

.popover .arrow {
  position: absolute;
  display: block;
  width: 1rem;
  height: 0.5rem;
  margin: 0 0.3rem;
}

.popover .arrow::before, .popover .arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-popover-top, .bs-popover-auto[x-placement^="top"] {
  margin-bottom: 0.5rem;
}

.bs-popover-top .arrow, .bs-popover-auto[x-placement^="top"] .arrow {
  bottom: calc((0.5rem + 1px) * -1);
}

.bs-popover-top .arrow::before, .bs-popover-auto[x-placement^="top"] .arrow::before,
.bs-popover-top .arrow::after,
.bs-popover-auto[x-placement^="top"] .arrow::after {
  border-width: 0.5rem 0.5rem 0;
}

.bs-popover-top .arrow::before, .bs-popover-auto[x-placement^="top"] .arrow::before {
  bottom: 0;
  border-top-color: rgba(0, 0, 0, 0.25);
}


.bs-popover-top .arrow::after,
.bs-popover-auto[x-placement^="top"] .arrow::after {
  bottom: 1px;
  border-top-color: #FFF;
}

.bs-popover-right, .bs-popover-auto[x-placement^="right"] {
  margin-left: 0.5rem;
}

.bs-popover-right .arrow, .bs-popover-auto[x-placement^="right"] .arrow {
  left: calc((0.5rem + 1px) * -1);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}

.bs-popover-right .arrow::before, .bs-popover-auto[x-placement^="right"] .arrow::before,
.bs-popover-right .arrow::after,
.bs-popover-auto[x-placement^="right"] .arrow::after {
  border-width: 0.5rem 0.5rem 0.5rem 0;
}

.bs-popover-right .arrow::before, .bs-popover-auto[x-placement^="right"] .arrow::before {
  left: 0;
  border-right-color: rgba(0, 0, 0, 0.25);
}


.bs-popover-right .arrow::after,
.bs-popover-auto[x-placement^="right"] .arrow::after {
  left: 1px;
  border-right-color: #FFF;
}

.bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
  margin-top: 0.5rem;
}

.bs-popover-bottom .arrow, .bs-popover-auto[x-placement^="bottom"] .arrow {
  top: calc((0.5rem + 1px) * -1);
}

.bs-popover-bottom .arrow::before, .bs-popover-auto[x-placement^="bottom"] .arrow::before,
.bs-popover-bottom .arrow::after,
.bs-popover-auto[x-placement^="bottom"] .arrow::after {
  border-width: 0 0.5rem 0.5rem 0.5rem;
}

.bs-popover-bottom .arrow::before, .bs-popover-auto[x-placement^="bottom"] .arrow::before {
  top: 0;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}


.bs-popover-bottom .arrow::after,
.bs-popover-auto[x-placement^="bottom"] .arrow::after {
  top: 1px;
  border-bottom-color: #FFF;
}

.bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 1rem;
  margin-left: -0.5rem;
  content: "";
  border-bottom: 1px solid #f7f7f7;
}

.bs-popover-left, .bs-popover-auto[x-placement^="left"] {
  margin-right: 0.5rem;
}

.bs-popover-left .arrow, .bs-popover-auto[x-placement^="left"] .arrow {
  right: calc((0.5rem + 1px) * -1);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}

.bs-popover-left .arrow::before, .bs-popover-auto[x-placement^="left"] .arrow::before,
.bs-popover-left .arrow::after,
.bs-popover-auto[x-placement^="left"] .arrow::after {
  border-width: 0.5rem 0 0.5rem 0.5rem;
}

.bs-popover-left .arrow::before, .bs-popover-auto[x-placement^="left"] .arrow::before {
  right: 0;
  border-left-color: rgba(0, 0, 0, 0.25);
}


.bs-popover-left .arrow::after,
.bs-popover-auto[x-placement^="left"] .arrow::after {
  right: 1px;
  border-left-color: #FFF;
}

.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: inherit;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}

.popover-header:empty {
  display: none;
}

.popover-body {
  padding: 0.5rem 0.75rem;
  color: #212529;
}

.carousel {
  position: relative;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.carousel-item {
  position: relative;
  display: none;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 100%;
  -webkit-transition: -webkit-transform 0.6s ease;
  transition: -webkit-transform 0.6s ease;
  -o-transition: transform 0.6s ease;
  transition: transform 0.6s ease;
  transition: transform 0.6s ease, -webkit-transform 0.6s ease;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-perspective: 1000px;
          perspective: 1000px;
}

@media screen and (prefers-reduced-motion: reduce) {
  .carousel-item {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

.carousel-item-next,
.carousel-item-prev {
  position: absolute;
  top: 0;
}

.carousel-item-next.carousel-item-left,
.carousel-item-prev.carousel-item-right {
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}

@supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
  .carousel-item-next.carousel-item-left,
  .carousel-item-prev.carousel-item-right {
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
  }
}

.carousel-item-next,
.active.carousel-item-right {
  -webkit-transform: translateX(100%);
      -ms-transform: translateX(100%);
          transform: translateX(100%);
}

@supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
  .carousel-item-next,
  .active.carousel-item-right {
    -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
  }
}

.carousel-item-prev,
.active.carousel-item-left {
  -webkit-transform: translateX(-100%);
      -ms-transform: translateX(-100%);
          transform: translateX(-100%);
}

@supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
  .carousel-item-prev,
  .active.carousel-item-left {
    -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
  }
}

.carousel-fade .carousel-item {
  opacity: 0;
  -webkit-transition-duration: .6s;
       -o-transition-duration: .6s;
          transition-duration: .6s;
  -webkit-transition-property: opacity;
  -o-transition-property: opacity;
  transition-property: opacity;
}

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
  opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
  opacity: 0;
}

.carousel-fade .carousel-item-next,
.carousel-fade .carousel-item-prev,
.carousel-fade .carousel-item.active,
.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-prev {
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}

@supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
  .carousel-fade .carousel-item-next,
  .carousel-fade .carousel-item-prev,
  .carousel-fade .carousel-item.active,
  .carousel-fade .active.carousel-item-left,
  .carousel-fade .active.carousel-item-prev {
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 15%;
  color: #FFF;
  text-align: center;
  opacity: 0.5;
}

.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #FFF;
  text-decoration: none;
  outline: 0;
  opacity: .9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: transparent no-repeat center center;
  background-size: 100% 100%;
}

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23FFF' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23FFF' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 10px;
  left: 0;
  z-index: 15;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none;
}

.carousel-indicators li {
  position: relative;
  -webkit-box-flex: 0;
      -ms-flex: 0 1 auto;
          flex: 0 1 auto;
  width: 30px;
  height: 3px;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: rgba(255, 255, 255, 0.5);
}

.carousel-indicators li::before {
  position: absolute;
  top: -10px;
  left: 0;
  display: inline-block;
  width: 100%;
  height: 10px;
  content: "";
}

.carousel-indicators li::after {
  position: absolute;
  bottom: -10px;
  left: 0;
  display: inline-block;
  width: 100%;
  height: 10px;
  content: "";
}

.carousel-indicators .active {
  background-color: #FFF;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #FFF;
  text-align: center;
}

.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.bg-primary {
  background-color: rgb(0, 28, 64) !important;
}

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #00635a !important;
}

.bg-secondary {
  background-color: #6c757d !important;
}

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #545b62 !important;
}

.bg-success {
  background-color: #bfefc4 !important;
  color: #02790c !important;
}

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #1e7e34 !important;
}

.bg-info {
  background-color: #b6bef5 !important;
  color: #0f2094 !important;
}

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #117a8b !important;
}

.bg-warning {
  background-color: #f2f98a !important;
  color: #8b9400 !important;
}

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #d39e00 !important;
}

.bg-danger {
  background-color: #f9c9cd !important;
  color: #a90312 !important;
}

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #bd2130 !important;
}

.bg-light {
  background-color: #f8f9fa !important;
}

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #dae0e5 !important;
}

.bg-dark {
  background-color: #343a40 !important;
}

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #1d2124 !important;
}

.bg-white {
  background-color: #FFF !important;
}

.bg-transparent {
  background-color: transparent !important;
}

.border {
  border: 1px solid #dee2e6 !important;
}

.border-top {
  border-top: 1px solid #dee2e6 !important;
}

.border-right {
  border-right: 1px solid #dee2e6 !important;
}

.border-bottom {
  border-bottom: 1px solid #dee2e6 !important;
}

.border-left {
  border-left: 1px solid #dee2e6 !important;
}

.border-0 {
  border: 0 !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-right-0 {
  border-right: 0 !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-left-0 {
  border-left: 0 !important;
}

.border-primary {
  border-color: rgb(0, 28, 64) !important;
}

.border-secondary {
  border-color: #6c757d !important;
}

.border-success {
  border-color: #28a745 !important;
}

.border-info {
  border-color: #17a2b8 !important;
}

.border-warning {
  border-color: #ffc107 !important;
}

.border-danger {
  border-color: #dc3545 !important;
}

.border-light {
  border-color: #f8f9fa !important;
}

.border-dark {
  border-color: #343a40 !important;
}

.border-white {
  border-color: #FFF !important;
}

.rounded {
  border-radius: 0.25rem !important;
}

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important;
}

.rounded-right {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important;
}

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-left {
  border-top-left-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-circle, .app-sidebar__user-avatar {
  border-radius: 50% !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.d-none {
  display: none !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important;
}

.d-inline-flex {
  display: -webkit-inline-box !important;
  display: -ms-inline-flexbox !important;
  display: inline-flex !important;
}

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 768px) {
  .d-md-none {
    display: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-md-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media print {
  .d-print-none {
    display: none !important;
  }
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-print-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden;
}

.embed-responsive::before {
  display: block;
  content: "";
}

.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}

.embed-responsive-21by9::before {
  padding-top: 42.8571428571%;
}

.embed-responsive-16by9::before {
  padding-top: 56.25%;
}

.embed-responsive-4by3::before {
  padding-top: 75%;
}

.embed-responsive-1by1::before {
  padding-top: 100%;
}

.flex-row {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: normal !important;
      -ms-flex-direction: row !important;
          flex-direction: row !important;
}

.flex-column {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: normal !important;
      -ms-flex-direction: column !important;
          flex-direction: column !important;
}

.flex-row-reverse {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: reverse !important;
      -ms-flex-direction: row-reverse !important;
          flex-direction: row-reverse !important;
}

.flex-column-reverse {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: reverse !important;
      -ms-flex-direction: column-reverse !important;
          flex-direction: column-reverse !important;
}

.flex-wrap {
  -ms-flex-wrap: wrap !important;
      flex-wrap: wrap !important;
}

.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
      flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
      flex-wrap: wrap-reverse !important;
}

.flex-fill {
  -webkit-box-flex: 1 !important;
      -ms-flex: 1 1 auto !important;
          flex: 1 1 auto !important;
}

.flex-grow-0 {
  -webkit-box-flex: 0 !important;
      -ms-flex-positive: 0 !important;
          flex-grow: 0 !important;
}

.flex-grow-1 {
  -webkit-box-flex: 1 !important;
      -ms-flex-positive: 1 !important;
          flex-grow: 1 !important;
}

.flex-shrink-0 {
  -ms-flex-negative: 0 !important;
      flex-shrink: 0 !important;
}

.flex-shrink-1 {
  -ms-flex-negative: 1 !important;
      flex-shrink: 1 !important;
}

.justify-content-start {
  -webkit-box-pack: start !important;
      -ms-flex-pack: start !important;
          justify-content: flex-start !important;
}

.justify-content-end {
  -webkit-box-pack: end !important;
      -ms-flex-pack: end !important;
          justify-content: flex-end !important;
}

.justify-content-center {
  -webkit-box-pack: center !important;
      -ms-flex-pack: center !important;
          justify-content: center !important;
}

.justify-content-between {
  -webkit-box-pack: justify !important;
      -ms-flex-pack: justify !important;
          justify-content: space-between !important;
}

.justify-content-around {
  -ms-flex-pack: distribute !important;
      justify-content: space-around !important;
}

.align-items-start {
  -webkit-box-align: start !important;
      -ms-flex-align: start !important;
          align-items: flex-start !important;
}

.align-items-end {
  -webkit-box-align: end !important;
      -ms-flex-align: end !important;
          align-items: flex-end !important;
}

.align-items-center {
  -webkit-box-align: center !important;
      -ms-flex-align: center !important;
          align-items: center !important;
}

.align-items-baseline {
  -webkit-box-align: baseline !important;
      -ms-flex-align: baseline !important;
          align-items: baseline !important;
}

.align-items-stretch {
  -webkit-box-align: stretch !important;
      -ms-flex-align: stretch !important;
          align-items: stretch !important;
}

.align-content-start {
  -ms-flex-line-pack: start !important;
      align-content: flex-start !important;
}

.align-content-end {
  -ms-flex-line-pack: end !important;
      align-content: flex-end !important;
}

.align-content-center {
  -ms-flex-line-pack: center !important;
      align-content: center !important;
}

.align-content-between {
  -ms-flex-line-pack: justify !important;
      align-content: space-between !important;
}

.align-content-around {
  -ms-flex-line-pack: distribute !important;
      align-content: space-around !important;
}

.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
      align-content: stretch !important;
}

.align-self-auto {
  -ms-flex-item-align: auto !important;
      align-self: auto !important;
}

.align-self-start {
  -ms-flex-item-align: start !important;
      align-self: flex-start !important;
}

.align-self-end {
  -ms-flex-item-align: end !important;
      align-self: flex-end !important;
}

.align-self-center {
  -ms-flex-item-align: center !important;
      align-self: center !important;
}

.align-self-baseline {
  -ms-flex-item-align: baseline !important;
      align-self: baseline !important;
}

.align-self-stretch {
  -ms-flex-item-align: stretch !important;
      align-self: stretch !important;
}

@media (min-width: 576px) {
  .flex-sm-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
            flex-direction: row !important;
  }
  .flex-sm-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
            flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
  }
  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
  }
  .flex-sm-fill {
    -webkit-box-flex: 1 !important;
        -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
  }
  .flex-sm-grow-0 {
    -webkit-box-flex: 0 !important;
        -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    -webkit-box-flex: 1 !important;
        -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
  }
  .justify-content-sm-start {
    -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
            justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
            justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
            justify-content: center !important;
  }
  .justify-content-sm-between {
    -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
            justify-content: space-between !important;
  }
  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
  }
  .align-items-sm-start {
    -webkit-box-align: start !important;
        -ms-flex-align: start !important;
            align-items: flex-start !important;
  }
  .align-items-sm-end {
    -webkit-box-align: end !important;
        -ms-flex-align: end !important;
            align-items: flex-end !important;
  }
  .align-items-sm-center {
    -webkit-box-align: center !important;
        -ms-flex-align: center !important;
            align-items: center !important;
  }
  .align-items-sm-baseline {
    -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
            align-items: baseline !important;
  }
  .align-items-sm-stretch {
    -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
            align-items: stretch !important;
  }
  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
  }
  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
  }
  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
        align-content: center !important;
  }
  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
  }
  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
  }
  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
  }
  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
        align-self: auto !important;
  }
  .align-self-sm-start {
    -ms-flex-item-align: start !important;
        align-self: flex-start !important;
  }
  .align-self-sm-end {
    -ms-flex-item-align: end !important;
        align-self: flex-end !important;
  }
  .align-self-sm-center {
    -ms-flex-item-align: center !important;
        align-self: center !important;
  }
  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
  }
  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
  }
}

@media (min-width: 768px) {
  .flex-md-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
            flex-direction: row !important;
  }
  .flex-md-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
            flex-direction: column !important;
  }
  .flex-md-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
  }
  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
  }
  .flex-md-fill {
    -webkit-box-flex: 1 !important;
        -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
  }
  .flex-md-grow-0 {
    -webkit-box-flex: 0 !important;
        -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    -webkit-box-flex: 1 !important;
        -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
  }
  .justify-content-md-start {
    -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
            justify-content: flex-start !important;
  }
  .justify-content-md-end {
    -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
            justify-content: flex-end !important;
  }
  .justify-content-md-center {
    -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
            justify-content: center !important;
  }
  .justify-content-md-between {
    -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
            justify-content: space-between !important;
  }
  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
  }
  .align-items-md-start {
    -webkit-box-align: start !important;
        -ms-flex-align: start !important;
            align-items: flex-start !important;
  }
  .align-items-md-end {
    -webkit-box-align: end !important;
        -ms-flex-align: end !important;
            align-items: flex-end !important;
  }
  .align-items-md-center {
    -webkit-box-align: center !important;
        -ms-flex-align: center !important;
            align-items: center !important;
  }
  .align-items-md-baseline {
    -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
            align-items: baseline !important;
  }
  .align-items-md-stretch {
    -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
            align-items: stretch !important;
  }
  .align-content-md-start {
    -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
  }
  .align-content-md-end {
    -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
  }
  .align-content-md-center {
    -ms-flex-line-pack: center !important;
        align-content: center !important;
  }
  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
  }
  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
  }
  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
  }
  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
        align-self: auto !important;
  }
  .align-self-md-start {
    -ms-flex-item-align: start !important;
        align-self: flex-start !important;
  }
  .align-self-md-end {
    -ms-flex-item-align: end !important;
        align-self: flex-end !important;
  }
  .align-self-md-center {
    -ms-flex-item-align: center !important;
        align-self: center !important;
  }
  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
  }
  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
  }
}

@media (min-width: 992px) {
  .flex-lg-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
            flex-direction: row !important;
  }
  .flex-lg-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
            flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
  }
  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
  }
  .flex-lg-fill {
    -webkit-box-flex: 1 !important;
        -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
  }
  .flex-lg-grow-0 {
    -webkit-box-flex: 0 !important;
        -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    -webkit-box-flex: 1 !important;
        -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
  }
  .justify-content-lg-start {
    -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
            justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
            justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
            justify-content: center !important;
  }
  .justify-content-lg-between {
    -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
            justify-content: space-between !important;
  }
  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
  }
  .align-items-lg-start {
    -webkit-box-align: start !important;
        -ms-flex-align: start !important;
            align-items: flex-start !important;
  }
  .align-items-lg-end {
    -webkit-box-align: end !important;
        -ms-flex-align: end !important;
            align-items: flex-end !important;
  }
  .align-items-lg-center {
    -webkit-box-align: center !important;
        -ms-flex-align: center !important;
            align-items: center !important;
  }
  .align-items-lg-baseline {
    -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
            align-items: baseline !important;
  }
  .align-items-lg-stretch {
    -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
            align-items: stretch !important;
  }
  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
  }
  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
  }
  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
        align-content: center !important;
  }
  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
  }
  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
  }
  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
  }
  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
        align-self: auto !important;
  }
  .align-self-lg-start {
    -ms-flex-item-align: start !important;
        align-self: flex-start !important;
  }
  .align-self-lg-end {
    -ms-flex-item-align: end !important;
        align-self: flex-end !important;
  }
  .align-self-lg-center {
    -ms-flex-item-align: center !important;
        align-self: center !important;
  }
  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
  }
  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
  }
}

@media (min-width: 1200px) {
  .flex-xl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
            flex-direction: row !important;
  }
  .flex-xl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
            flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
  }
  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
  }
  .flex-xl-fill {
    -webkit-box-flex: 1 !important;
        -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
  }
  .flex-xl-grow-0 {
    -webkit-box-flex: 0 !important;
        -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    -webkit-box-flex: 1 !important;
        -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
  }
  .justify-content-xl-start {
    -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
            justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
            justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
            justify-content: center !important;
  }
  .justify-content-xl-between {
    -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
            justify-content: space-between !important;
  }
  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
  }
  .align-items-xl-start {
    -webkit-box-align: start !important;
        -ms-flex-align: start !important;
            align-items: flex-start !important;
  }
  .align-items-xl-end {
    -webkit-box-align: end !important;
        -ms-flex-align: end !important;
            align-items: flex-end !important;
  }
  .align-items-xl-center {
    -webkit-box-align: center !important;
        -ms-flex-align: center !important;
            align-items: center !important;
  }
  .align-items-xl-baseline {
    -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
            align-items: baseline !important;
  }
  .align-items-xl-stretch {
    -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
            align-items: stretch !important;
  }
  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
  }
  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
  }
  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
        align-content: center !important;
  }
  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
  }
  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
  }
  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
  }
  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
        align-self: auto !important;
  }
  .align-self-xl-start {
    -ms-flex-item-align: start !important;
        align-self: flex-start !important;
  }
  .align-self-xl-end {
    -ms-flex-item-align: end !important;
        align-self: flex-end !important;
  }
  .align-self-xl-center {
    -ms-flex-item-align: center !important;
        align-self: center !important;
  }
  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
  }
  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
  }
}

.float-left {
  float: left !important;
}

.float-right {
  float: right !important;
}

.float-none {
  float: none !important;
}

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important;
  }
  .float-sm-right {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
}

@media (min-width: 768px) {
  .float-md-left {
    float: left !important;
  }
  .float-md-right {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
}

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important;
  }
  .float-lg-right {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
}

@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important;
  }
  .float-xl-right {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: -webkit-sticky !important;
  position: sticky !important;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

@supports ((position: -webkit-sticky) or (position: sticky)) {
  .sticky-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal;
}

.shadow-sm {
  -webkit-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
          box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow {
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-lg {
  -webkit-box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
          box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
  -webkit-box-shadow: none !important;
          box-shadow: none !important;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.w-auto {
  width: auto !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.h-auto {
  height: auto !important;
}

.mw-100 {
  max-width: 100% !important;
}

.mh-100 {
  max-height: 100% !important;
}

.m-0 {
  margin: 0 !important;
}

.mt-0,
.my-0 {
  margin-top: 0 !important;
}

.mr-0,
.mx-0 {
  margin-right: 0 !important;
}

.mb-0,
.my-0 {
  margin-bottom: 0 !important;
}

.ml-0,
.mx-0 {
  margin-left: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.mt-1,
.my-1 {
  margin-top: 0.25rem !important;
}

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important;
}

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important;
}

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.mt-2,
.my-2 {
  margin-top: 0.5rem !important;
}

.mr-2,
.mx-2 {
  margin-right: 0.5rem !important;
}

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important;
}

.ml-2,
.mx-2 {
  margin-left: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.mt-3,
.my-3 {
  margin-top: 1rem !important;
}

.mr-3,
.mx-3 {
  margin-right: 1rem !important;
}

.mb-3,
.my-3 {
  margin-bottom: 1rem !important;
}

.ml-3,
.mx-3 {
  margin-left: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.mt-4,
.my-4 {
  margin-top: 1.5rem !important;
}

.mr-4,
.mx-4 {
  margin-right: 1.5rem !important;
}

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important;
}

.ml-4,
.mx-4 {
  margin-left: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.mt-5,
.my-5 {
  margin-top: 3rem !important;
}

.mr-5,
.mx-5 {
  margin-right: 3rem !important;
}

.mb-5,
.my-5 {
  margin-bottom: 3rem !important;
}

.ml-5,
.mx-5 {
  margin-left: 3rem !important;
}

.p-0 {
  padding: 0 !important;
}

.pt-0,
.py-0 {
  padding-top: 0 !important;
}

.pr-0,
.px-0 {
  padding-right: 0 !important;
}

.pb-0,
.py-0 {
  padding-bottom: 0 !important;
}

.pl-0,
.px-0 {
  padding-left: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.pt-1,
.py-1 {
  padding-top: 0.25rem !important;
}

.pr-1,
.px-1 {
  padding-right: 0.25rem !important;
}

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important;
}

.pl-1,
.px-1 {
  padding-left: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.pt-2,
.py-2 {
  padding-top: 0.5rem !important;
}

.pr-2,
.px-2 {
  padding-right: 0.5rem !important;
}

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important;
}

.pl-2,
.px-2 {
  padding-left: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.pt-3,
.py-3 {
  padding-top: 1rem !important;
}

.pr-3,
.px-3 {
  padding-right: 1rem !important;
}

.pb-3,
.py-3 {
  padding-bottom: 1rem !important;
}

.pl-3,
.px-3 {
  padding-left: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.pt-4,
.py-4 {
  padding-top: 1.5rem !important;
}

.pr-4,
.px-4 {
  padding-right: 1.5rem !important;
}

.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important;
}

.pl-4,
.px-4 {
  padding-left: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.pt-5,
.py-5 {
  padding-top: 3rem !important;
}

.pr-5,
.px-5 {
  padding-right: 3rem !important;
}

.pb-5,
.py-5 {
  padding-bottom: 3rem !important;
}

.pl-5,
.px-5 {
  padding-left: 3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mt-auto,
.my-auto {
  margin-top: auto !important;
}

.mr-auto,
.mx-auto {
  margin-right: auto !important;
}

.mb-auto,
.my-auto {
  margin-bottom: auto !important;
}

.ml-auto,
.mx-auto {
  margin-left: auto !important;
}

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important;
  }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important;
  }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important;
  }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important;
  }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important;
  }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important;
  }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 1rem !important;
  }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important;
  }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important;
  }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important;
  }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important;
  }
  .m-sm-4 {
    margin: 1.5rem !important;
  }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important;
  }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important;
  }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important;
  }
  .m-sm-5 {
    margin: 3rem !important;
  }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important;
  }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important;
  }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important;
  }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important;
  }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important;
  }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important;
  }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 1rem !important;
  }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important;
  }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important;
  }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important;
  }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important;
  }
  .p-sm-4 {
    padding: 1.5rem !important;
  }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important;
  }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important;
  }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important;
  }
  .p-sm-5 {
    padding: 3rem !important;
  }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important;
  }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important;
  }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important;
  }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important;
  }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important;
  }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important;
  }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important;
  }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important;
  }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important;
  }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important;
  }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important;
  }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important;
  }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important;
  }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important;
  }
  .m-md-3 {
    margin: 1rem !important;
  }
  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important;
  }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important;
  }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important;
  }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important;
  }
  .m-md-4 {
    margin: 1.5rem !important;
  }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important;
  }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important;
  }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important;
  }
  .m-md-5 {
    margin: 3rem !important;
  }
  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important;
  }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important;
  }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important;
  }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important;
  }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important;
  }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important;
  }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important;
  }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important;
  }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important;
  }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important;
  }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important;
  }
  .p-md-3 {
    padding: 1rem !important;
  }
  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important;
  }
  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important;
  }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important;
  }
  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important;
  }
  .p-md-4 {
    padding: 1.5rem !important;
  }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important;
  }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important;
  }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important;
  }
  .p-md-5 {
    padding: 3rem !important;
  }
  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important;
  }
  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important;
  }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important;
  }
  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important;
  }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important;
  }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important;
  }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important;
  }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important;
  }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important;
  }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important;
  }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important;
  }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important;
  }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 1rem !important;
  }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important;
  }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important;
  }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important;
  }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important;
  }
  .m-lg-4 {
    margin: 1.5rem !important;
  }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important;
  }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important;
  }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important;
  }
  .m-lg-5 {
    margin: 3rem !important;
  }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important;
  }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important;
  }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important;
  }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important;
  }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important;
  }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important;
  }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 1rem !important;
  }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important;
  }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important;
  }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important;
  }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important;
  }
  .p-lg-4 {
    padding: 1.5rem !important;
  }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important;
  }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important;
  }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important;
  }
  .p-lg-5 {
    padding: 3rem !important;
  }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important;
  }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important;
  }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important;
  }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important;
  }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important;
  }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important;
  }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important;
  }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important;
  }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important;
  }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important;
  }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important;
  }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 1rem !important;
  }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important;
  }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important;
  }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important;
  }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important;
  }
  .m-xl-4 {
    margin: 1.5rem !important;
  }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important;
  }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important;
  }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important;
  }
  .m-xl-5 {
    margin: 3rem !important;
  }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important;
  }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important;
  }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important;
  }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important;
  }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important;
  }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important;
  }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 1rem !important;
  }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important;
  }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important;
  }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important;
  }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important;
  }
  .p-xl-4 {
    padding: 1.5rem !important;
  }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important;
  }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important;
  }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important;
  }
  .p-xl-5 {
    padding: 3rem !important;
  }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important;
  }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important;
  }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important;
  }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important;
  }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important;
  }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important;
  }
}

.text-monospace {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

.text-justify {
  text-align: justify !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

.text-truncate {
  overflow: hidden;
  -o-text-overflow: ellipsis;
     text-overflow: ellipsis;
  white-space: nowrap;
}

.text-left {
  text-align: left !important;
}

.text-right {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important;
  }
  .text-sm-right {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important;
  }
  .text-md-right {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important;
  }
  .text-lg-right {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important;
  }
  .text-xl-right {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.font-weight-light {
  font-weight: 300 !important;
}

.font-weight-normal {
  font-weight: 400 !important;
}

.font-weight-bold {
  font-weight: 700 !important;
}

.font-italic {
  font-style: italic !important;
}

.text-white {
  color: #FFF !important;
}

.text-primary {
  color: rgb(0, 28, 64) !important;
}

a.text-primary:hover, a.text-primary:focus {
  color: #00635a !important;
}

.text-secondary {
  color: #6c757d !important;
}

a.text-secondary:hover, a.text-secondary:focus {
  color: #545b62 !important;
}

.text-success {
  color: #28a745 !important;
}

a.text-success:hover, a.text-success:focus {
  color: #1e7e34 !important;
}

.text-info {
  color: #17a2b8 !important;
}

a.text-info:hover, a.text-info:focus {
  color: #117a8b !important;
}

.text-warning {
  color: #ffc107 !important;
}

a.text-warning:hover, a.text-warning:focus {
  color: #d39e00 !important;
}

.text-danger {
  color: #dc3545 !important;
}

a.text-danger:hover, a.text-danger:focus {
  color: #bd2130 !important;
}

.text-light {
  color: #f8f9fa !important;
}

a.text-light:hover, a.text-light:focus {
  color: #dae0e5 !important;
}

.text-dark {
  color: #343a40 !important;
}

a.text-dark:hover, a.text-dark:focus {
  color: #1d2124 !important;
}

.text-body {
  color: #212529 !important;
}

.text-muted, .app-notification__meta {
  color: #6c757d !important;
}

.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    -webkit-box-shadow: none !important;
            box-shadow: none !important;
  }
  a:not(.btn) {
    text-decoration: underline;
  }
  abbr[title]::after {
    content: " (" attr(title) ")";
  }
  pre {
    white-space: pre-wrap !important;
  }
  pre,
  blockquote {
    border: 1px solid #adb5bd;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  @page {
    size: a3;
  }
  body {
    min-width: 992px !important;
  }
  .container {
    min-width: 992px !important;
  }
  .navbar {
    display: none;
  }
  .badge {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #FFF !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6 !important;
  }
  .table-dark {
    color: inherit;
  }
  .table-dark th,
  .table-dark td,
  .table-dark thead th,
  .table-dark tbody + tbody {
    border-color: #dee2e6;
  }
  .table .thead-dark th {
    color: inherit;
    border-color: #dee2e6;
  }
}

table.dataTable {
  clear: both;
  margin-top: 6px !important;
  margin-bottom: 6px !important;
  max-width: none !important;
}

table.dataTable td,
table.dataTable th {
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
}

table.dataTable td.dataTables_empty,
table.dataTable th.dataTables_empty {
  text-align: center;
}

table.dataTable.nowrap th,
table.dataTable.nowrap td {
  white-space: nowrap;
}

.tile div.dataTables_wrapper {
  padding: 0;
}

div.dataTables_wrapper div.dataTables_length label {
  font-weight: normal;
  text-align: left;
  white-space: nowrap;
  margin-top: 15px;
}

div.dataTables_wrapper div.dataTables_length select {
  width: 75px;
  display: inline-block;
}

div.dataTables_wrapper div.dataTables_filter {
  text-align: right;
}

div.dataTables_wrapper div.dataTables_filter label {
  font-weight: 600;
  white-space: nowrap;
  text-align: left;
  background: white;
  color: black;
  padding: 10px;
  border-radius: .357rem;
  border: 1px solid #ddd;
}

div.dataTables_wrapper div.dataTables_filter input {
  margin-left: 0.5em;
  display: inline-block;
  width: auto;
}

div.dataTables_wrapper div.dataTables_info {
  padding-top: 0.85em;
  white-space: nowrap;
}

div.dataTables_wrapper div.dataTables_paginate {
  margin: 0;
  white-space: nowrap;
  text-align: right;
}

div.dataTables_wrapper div.dataTables_paginate ul.pagination {
  margin: 2px 0;
  white-space: nowrap;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
}
.element-button {
  position: relative;
  border-bottom: 1px solid #ddd;
  padding-bottom: 10px;
  margin-bottom: 10px;
 
}
.btn-delete{
  background: #d0d0d0;
  color: #f99a9a;
}
.nhap-tu-file{
  background: #e1ec86 !important;
  color: #4b5400 !important;
}
div.dataTables_wrapper div.dataTables_processing {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 200px;
  margin-left: -100px;
  margin-top: -26px;
  text-align: center;
  padding: 1em 0;
}


table.dataTable thead > tr > th:active,
table.dataTable thead > tr > td:active {
  outline: none;
}

table.dataTable thead .sorting,
table.dataTable thead .sorting_asc,
table.dataTable thead .sorting_desc,
table.dataTable thead .sorting_asc_disabled,
table.dataTable thead .sorting_desc_disabled {
  cursor: pointer;
  position: relative;
  outline: none !important;
  background: #eee;
}

table.dataTable thead .sorting:before, table.dataTable thead .sorting:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before,
table.dataTable thead .sorting_desc_disabled:after {
  position: absolute;
  bottom: 0.9em;
  display: block;
  opacity: 0.3;
}



table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_desc:after {
  opacity: 1;
}

table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc_disabled:after {
  opacity: 0;
}

div.dataTables_scrollHead table.dataTable {
  margin-bottom: 0 !important;
}

div.dataTables_scrollBody table {
  border-top: none;
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

div.dataTables_scrollBody table thead .sorting:after,
div.dataTables_scrollBody table thead .sorting_asc:after,
div.dataTables_scrollBody table thead .sorting_desc:after {
  display: none;
}

div.dataTables_scrollBody table tbody tr:first-child th,
div.dataTables_scrollBody table tbody tr:first-child td {
  border-top: none;
}

div.dataTables_scrollFoot > .dataTables_scrollFootInner {
  -webkit-box-sizing: content-box;
          box-sizing: content-box;
}

div.dataTables_scrollFoot > .dataTables_scrollFootInner > table {
  margin-top: 0 !important;
  border-top: none;
}

@media screen and (max-width: 767px) {
  div.dataTables_wrapper div.dataTables_length,
  div.dataTables_wrapper div.dataTables_filter,
  div.dataTables_wrapper div.dataTables_info,
  div.dataTables_wrapper div.dataTables_paginate {
    text-align: center;
  }
}

table.dataTable.table-sm > thead > tr > th {
  padding-right: 20px;
}

table.dataTable.table-sm .sorting:before,
table.dataTable.table-sm .sorting_asc:before,
table.dataTable.table-sm .sorting_desc:before {
  top: 5px;
  right: 0.85em;
}

table.dataTable.table-sm .sorting:after,
table.dataTable.table-sm .sorting_asc:after,
table.dataTable.table-sm .sorting_desc:after {
  top: 5px;
}

table.table-bordered.dataTable th,
table.table-bordered.dataTable td {
  border-left-width: 0;
}

table.table-bordered.dataTable th:last-child, table.table-bordered.dataTable th:last-child,
table.table-bordered.dataTable td:last-child,
table.table-bordered.dataTable td:last-child {
  border-right-width: 0;
}

table.table-bordered.dataTable tbody th,
table.table-bordered.dataTable tbody td {
  border-bottom-width: 0;
}

div.dataTables_scrollHead table.table-bordered {
  border-bottom-width: 0;
}

div.table-responsive > div.dataTables_wrapper > div.row {
  margin: 0;
}

div.table-responsive > div.dataTables_wrapper > div.row > div[class^="col-"]:first-child {
  padding-left: 0;
}

div.table-responsive > div.dataTables_wrapper > div.row > div[class^="col-"]:last-child {
  padding-right: 0;
}

/*!
 * Datepicker for Bootstrap v1.5.0 (https://github.com/eternicode/bootstrap-datepicker)
 *
 * Copyright 2012 Stefan Petre
 * Improvements by Andrew Rowls
 * Licensed under the Apache License v2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 */
.datepicker {
  border-radius: 4px;
  direction: ltr;
}

.datepicker-inline {
  width: 220px;
}

.datepicker.datepicker-rtl {
  direction: rtl;
}

.datepicker.datepicker-rtl table tr td span {
  float: right;
}

.datepicker-dropdown {
  top: 0;
  left: 0;
  padding: 4px;
}

.datepicker-dropdown:before {
  content: '';
  display: inline-block;
  border-left: 7px solid transparent;
  border-right: 7px solid transparent;
  border-bottom: 7px solid rgba(0, 0, 0, 0.15);
  border-top: 0;
  border-bottom-color: rgba(0, 0, 0, 0.2);
  position: absolute;
}

.datepicker-dropdown:after {
  content: '';
  display: inline-block;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 6px solid #ffffff;
  border-top: 0;
  position: absolute;
}

.datepicker-dropdown.datepicker-orient-left:before {
  left: 6px;
}

.datepicker-dropdown.datepicker-orient-left:after {
  left: 7px;
}

.datepicker-dropdown.datepicker-orient-right:before {
  right: 6px;
}

.datepicker-dropdown.datepicker-orient-right:after {
  right: 7px;
}

.datepicker-dropdown.datepicker-orient-bottom:before {
  top: -7px;
}

.datepicker-dropdown.datepicker-orient-bottom:after {
  top: -6px;
}

.datepicker-dropdown.datepicker-orient-top:before {
  bottom: -7px;
  border-bottom: 0;
  border-top: 7px solid rgba(0, 0, 0, 0.15);
}

.datepicker-dropdown.datepicker-orient-top:after {
  bottom: -6px;
  border-bottom: 0;
  border-top: 6px solid #ffffff;
}

.datepicker table {
  margin: 0;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.datepicker table tr td,
.datepicker table tr th {
  text-align: center;
  width: 30px;
  height: 30px;
  border-radius: 4px;
  border: none;
}

.table-striped .datepicker table tr td,
.table-striped .datepicker table tr th {
  background-color: transparent;
}

.datepicker-days tbody tr td {
  border-radius: .357rem;
  font-weight: 500;
}

.datepicker table tr td.old,
.datepicker table tr td.new {
  color: #999999;
}

.datepicker table tr td.day:hover,
.datepicker table tr td.focused {
  background: #eeeeee;
  cursor: pointer;
}

.datepicker table tr td.disabled,
.datepicker table tr td.disabled:hover {
  background: none;
  color: #999999;
  cursor: default;
}

.datepicker table tr td.highlighted {
  color: #000000;
  background-color: #d9edf7;
  border-color: #85c5e5;
  border-radius: 0;
}

.datepicker table tr td.highlighted:focus,
.datepicker table tr td.highlighted.focus {
  color: #000000;
  background-color: #afd9ee;
  border-color: #298fc2;
}

.datepicker table tr td.highlighted:hover {
  color: #000000;
  background-color: #afd9ee;
  border-color: #52addb;
}

.datepicker table tr td.highlighted:active,
.datepicker table tr td.highlighted.active,
.open > .dropdown-toggle.datepicker table tr td.highlighted {
  color: #000000;
  background-color: #afd9ee;
  border-color: #52addb;
}

.datepicker table tr td.highlighted:active:hover,
.datepicker table tr td.highlighted.active:hover,
.open > .dropdown-toggle.datepicker table tr td.highlighted:hover,
.datepicker table tr td.highlighted:active:focus,
.datepicker table tr td.highlighted.active:focus,
.open > .dropdown-toggle.datepicker table tr td.highlighted:focus,
.datepicker table tr td.highlighted:active.focus,
.datepicker table tr td.highlighted.active.focus,
.open > .dropdown-toggle.datepicker table tr td.highlighted.focus {
  color: #000000;
  background-color: #91cbe8;
  border-color: #298fc2;
}

.datepicker table tr td.highlighted:active,
.datepicker table tr td.highlighted.active,
.open > .dropdown-toggle.datepicker table tr td.highlighted {
  background-image: none;
}

.datepicker table tr td.highlighted.disabled:hover,
.datepicker table tr td.highlighted[disabled]:hover,
fieldset[disabled] .datepicker table tr td.highlighted:hover,
.datepicker table tr td.highlighted.disabled:focus,
.datepicker table tr td.highlighted[disabled]:focus,
fieldset[disabled] .datepicker table tr td.highlighted:focus,
.datepicker table tr td.highlighted.disabled.focus,
.datepicker table tr td.highlighted[disabled].focus,
fieldset[disabled] .datepicker table tr td.highlighted.focus {
  background-color: #d9edf7;
  border-color: #85c5e5;
}

.datepicker table tr td.highlighted.focused {
  background: #afd9ee;
}

.datepicker table tr td.highlighted.disabled,
.datepicker table tr td.highlighted.disabled:active {
  background: #d9edf7;
  color: #999999;
}

.datepicker table tr td.today {
  color: #000000;
  background-color: #ffdb99;
  border-color: #ffb733;
}

.datepicker table tr td.today:focus,
.datepicker table tr td.today.focus {
  color: #000000;
  background-color: #ffc966;
  border-color: #b37400;
}

.datepicker table tr td.today:hover {
  color: #000000;
  background-color: #ffc966;
  border-color: #f59e00;
}

.datepicker table tr td.today:active,
.datepicker table tr td.today.active,
.open > .dropdown-toggle.datepicker table tr td.today {
  color: #000000;
  background-color: #ffc966;
  border-color: #f59e00;
}

.datepicker table tr td.today:active:hover,
.datepicker table tr td.today.active:hover,
.open > .dropdown-toggle.datepicker table tr td.today:hover,
.datepicker table tr td.today:active:focus,
.datepicker table tr td.today.active:focus,
.open > .dropdown-toggle.datepicker table tr td.today:focus,
.datepicker table tr td.today:active.focus,
.datepicker table tr td.today.active.focus,
.open > .dropdown-toggle.datepicker table tr td.today.focus {
  color: #000000;
  background-color: #ffbc42;
  border-color: #b37400;
}

.datepicker table tr td.today:active,
.datepicker table tr td.today.active,
.open > .dropdown-toggle.datepicker table tr td.today {
  background-image: none;
}

.datepicker table tr td.today.disabled:hover,
.datepicker table tr td.today[disabled]:hover,
fieldset[disabled] .datepicker table tr td.today:hover,
.datepicker table tr td.today.disabled:focus,
.datepicker table tr td.today[disabled]:focus,
fieldset[disabled] .datepicker table tr td.today:focus,
.datepicker table tr td.today.disabled.focus,
.datepicker table tr td.today[disabled].focus,
fieldset[disabled] .datepicker table tr td.today.focus {
  background-color: #ffdb99;
  border-color: #ffb733;
}

.datepicker table tr td.today.focused {
  background: #ffc966;
}

.datepicker table tr td.today.disabled,
.datepicker table tr td.today.disabled:active {
  background: #ffdb99;
  color: #999999;
}

.datepicker table tr td.range {
  color: #000000;
  background-color: #eeeeee;
  border-color: #bbbbbb;
  border-radius: 0;
}

.datepicker table tr td.range:focus,
.datepicker table tr td.range.focus {
  color: #000000;
  background-color: #d5d5d5;
  border-color: #7c7c7c;
}

.datepicker table tr td.range:hover {
  color: #000000;
  background-color: #d5d5d5;
  border-color: #9d9d9d;
}

.datepicker table tr td.range:active,
.datepicker table tr td.range.active,
.open > .dropdown-toggle.datepicker table tr td.range {
  color: #000000;
  background-color: #d5d5d5;
  border-color: #9d9d9d;
}

.datepicker table tr td.range:active:hover,
.datepicker table tr td.range.active:hover,
.open > .dropdown-toggle.datepicker table tr td.range:hover,
.datepicker table tr td.range:active:focus,
.datepicker table tr td.range.active:focus,
.open > .dropdown-toggle.datepicker table tr td.range:focus,
.datepicker table tr td.range:active.focus,
.datepicker table tr td.range.active.focus,
.open > .dropdown-toggle.datepicker table tr td.range.focus {
  color: #000000;
  background-color: #c3c3c3;
  border-color: #7c7c7c;
}

.datepicker table tr td.range:active,
.datepicker table tr td.range.active,
.open > .dropdown-toggle.datepicker table tr td.range {
  background-image: none;
}

.datepicker table tr td.range.disabled:hover,
.datepicker table tr td.range[disabled]:hover,
fieldset[disabled] .datepicker table tr td.range:hover,
.datepicker table tr td.range.disabled:focus,
.datepicker table tr td.range[disabled]:focus,
fieldset[disabled] .datepicker table tr td.range:focus,
.datepicker table tr td.range.disabled.focus,
.datepicker table tr td.range[disabled].focus,
fieldset[disabled] .datepicker table tr td.range.focus {
  background-color: #eeeeee;
  border-color: #bbbbbb;
}

.datepicker table tr td.range.focused {
  background: #d5d5d5;
}

.datepicker table tr td.range.disabled,
.datepicker table tr td.range.disabled:active {
  background: #eeeeee;
  color: #999999;
}

.datepicker table tr td.range.highlighted {
  color: #000000;
  background-color: #e4eef3;
  border-color: #9dc1d3;
}

.datepicker table tr td.range.highlighted:focus,
.datepicker table tr td.range.highlighted.focus {
  color: #000000;
  background-color: #c1d7e3;
  border-color: #4b88a6;
}

.datepicker table tr td.range.highlighted:hover {
  color: #000000;
  background-color: #c1d7e3;
  border-color: #73a6c0;
}

.datepicker table tr td.range.highlighted:active,
.datepicker table tr td.range.highlighted.active,
.open > .dropdown-toggle.datepicker table tr td.range.highlighted {
  color: #000000;
  background-color: #c1d7e3;
  border-color: #73a6c0;
}

.datepicker table tr td.range.highlighted:active:hover,
.datepicker table tr td.range.highlighted.active:hover,
.open > .dropdown-toggle.datepicker table tr td.range.highlighted:hover,
.datepicker table tr td.range.highlighted:active:focus,
.datepicker table tr td.range.highlighted.active:focus,
.open > .dropdown-toggle.datepicker table tr td.range.highlighted:focus,
.datepicker table tr td.range.highlighted:active.focus,
.datepicker table tr td.range.highlighted.active.focus,
.open > .dropdown-toggle.datepicker table tr td.range.highlighted.focus {
  color: #000000;
  background-color: #a8c8d8;
  border-color: #4b88a6;
}

.datepicker table tr td.range.highlighted:active,
.datepicker table tr td.range.highlighted.active,
.open > .dropdown-toggle.datepicker table tr td.range.highlighted {
  background-image: none;
}

.datepicker table tr td.range.highlighted.disabled:hover,
.datepicker table tr td.range.highlighted[disabled]:hover,
fieldset[disabled] .datepicker table tr td.range.highlighted:hover,
.datepicker table tr td.range.highlighted.disabled:focus,
.datepicker table tr td.range.highlighted[disabled]:focus,
fieldset[disabled] .datepicker table tr td.range.highlighted:focus,
.datepicker table tr td.range.highlighted.disabled.focus,
.datepicker table tr td.range.highlighted[disabled].focus,
fieldset[disabled] .datepicker table tr td.range.highlighted.focus {
  background-color: #e4eef3;
  border-color: #9dc1d3;
}

.datepicker table tr td.range.highlighted.focused {
  background: #c1d7e3;
}

.datepicker table tr td.range.highlighted.disabled,
.datepicker table tr td.range.highlighted.disabled:active {
  background: #e4eef3;
  color: #999999;
}

.datepicker table tr td.range.today {
  color: #000000;
  background-color: #f7ca77;
  border-color: #f1a417;
}

.datepicker table tr td.range.today:focus,
.datepicker table tr td.range.today.focus {
  color: #000000;
  background-color: #f4b747;
  border-color: #815608;
}

.datepicker table tr td.range.today:hover {
  color: #000000;
  background-color: #f4b747;
  border-color: #bf800c;
}

.datepicker table tr td.range.today:active,
.datepicker table tr td.range.today.active,
.open > .dropdown-toggle.datepicker table tr td.range.today {
  color: #000000;
  background-color: #f4b747;
  border-color: #bf800c;
}

.datepicker table tr td.range.today:active:hover,
.datepicker table tr td.range.today.active:hover,
.open > .dropdown-toggle.datepicker table tr td.range.today:hover,
.datepicker table tr td.range.today:active:focus,
.datepicker table tr td.range.today.active:focus,
.open > .dropdown-toggle.datepicker table tr td.range.today:focus,
.datepicker table tr td.range.today:active.focus,
.datepicker table tr td.range.today.active.focus,
.open > .dropdown-toggle.datepicker table tr td.range.today.focus {
  color: #000000;
  background-color: #f2aa25;
  border-color: #815608;
}

.datepicker table tr td.range.today:active,
.datepicker table tr td.range.today.active,
.open > .dropdown-toggle.datepicker table tr td.range.today {
  background-image: none;
}

.datepicker table tr td.range.today.disabled:hover,
.datepicker table tr td.range.today[disabled]:hover,
fieldset[disabled] .datepicker table tr td.range.today:hover,
.datepicker table tr td.range.today.disabled:focus,
.datepicker table tr td.range.today[disabled]:focus,
fieldset[disabled] .datepicker table tr td.range.today:focus,
.datepicker table tr td.range.today.disabled.focus,
.datepicker table tr td.range.today[disabled].focus,
fieldset[disabled] .datepicker table tr td.range.today.focus {
  background-color: #f7ca77;
  border-color: #f1a417;
}

.datepicker table tr td.range.today.disabled,
.datepicker table tr td.range.today.disabled:active {
  background: #f7ca77;
  color: #999999;
}

.datepicker table tr td.selected,
.datepicker table tr td.selected.highlighted {
  color: #ffffff;
  background-color: #999999;
  border-color: #555555;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}

.datepicker table tr td.selected:focus,
.datepicker table tr td.selected.highlighted:focus,
.datepicker table tr td.selected.focus,
.datepicker table tr td.selected.highlighted.focus {
  color: #ffffff;
  background-color: #808080;
  border-color: #161616;
}

.datepicker table tr td.selected:hover,
.datepicker table tr td.selected.highlighted:hover {
  color: #ffffff;
  background-color: #808080;
  border-color: #373737;
}

.datepicker table tr td.selected:active,
.datepicker table tr td.selected.highlighted:active,
.datepicker table tr td.selected.active,
.datepicker table tr td.selected.highlighted.active,
.open > .dropdown-toggle.datepicker table tr td.selected,
.open > .dropdown-toggle.datepicker table tr td.selected.highlighted {
  color: #ffffff;
  background-color: #808080;
  border-color: #373737;
}

.datepicker table tr td.selected:active:hover,
.datepicker table tr td.selected.highlighted:active:hover,
.datepicker table tr td.selected.active:hover,
.datepicker table tr td.selected.highlighted.active:hover,
.open > .dropdown-toggle.datepicker table tr td.selected:hover,
.open > .dropdown-toggle.datepicker table tr td.selected.highlighted:hover,
.datepicker table tr td.selected:active:focus,
.datepicker table tr td.selected.highlighted:active:focus,
.datepicker table tr td.selected.active:focus,
.datepicker table tr td.selected.highlighted.active:focus,
.open > .dropdown-toggle.datepicker table tr td.selected:focus,
.open > .dropdown-toggle.datepicker table tr td.selected.highlighted:focus,
.datepicker table tr td.selected:active.focus,
.datepicker table tr td.selected.highlighted:active.focus,
.datepicker table tr td.selected.active.focus,
.datepicker table tr td.selected.highlighted.active.focus,
.open > .dropdown-toggle.datepicker table tr td.selected.focus,
.open > .dropdown-toggle.datepicker table tr td.selected.highlighted.focus {
  color: #ffffff;
  background-color: #6e6e6e;
  border-color: #161616;
}

.datepicker table tr td.selected:active,
.datepicker table tr td.selected.highlighted:active,
.datepicker table tr td.selected.active,
.datepicker table tr td.selected.highlighted.active,
.open > .dropdown-toggle.datepicker table tr td.selected,
.open > .dropdown-toggle.datepicker table tr td.selected.highlighted {
  background-image: none;
}

.datepicker table tr td.selected.disabled:hover,
.datepicker table tr td.selected.highlighted.disabled:hover,
.datepicker table tr td.selected[disabled]:hover,
.datepicker table tr td.selected.highlighted[disabled]:hover,
fieldset[disabled] .datepicker table tr td.selected:hover,
fieldset[disabled] .datepicker table tr td.selected.highlighted:hover,
.datepicker table tr td.selected.disabled:focus,
.datepicker table tr td.selected.highlighted.disabled:focus,
.datepicker table tr td.selected[disabled]:focus,
.datepicker table tr td.selected.highlighted[disabled]:focus,
fieldset[disabled] .datepicker table tr td.selected:focus,
fieldset[disabled] .datepicker table tr td.selected.highlighted:focus,
.datepicker table tr td.selected.disabled.focus,
.datepicker table tr td.selected.highlighted.disabled.focus,
.datepicker table tr td.selected[disabled].focus,
.datepicker table tr td.selected.highlighted[disabled].focus,
fieldset[disabled] .datepicker table tr td.selected.focus,
fieldset[disabled] .datepicker table tr td.selected.highlighted.focus {
  background-color: #999999;
  border-color: #555555;
}

.datepicker table tr td.active,
.datepicker table tr td.active.highlighted {
  color: #ffffff;
  background-color: #428bca;
  border-color: #357ebd;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}

.datepicker table tr td.active:focus,
.datepicker table tr td.active.highlighted:focus,
.datepicker table tr td.active.focus,
.datepicker table tr td.active.highlighted.focus {
  color: #ffffff;
  background-color: rgb(0, 28, 64);
  border-color: #193c5a;
}

.datepicker table tr td.active:hover,
.datepicker table tr td.active.highlighted:hover {
  color: #ffffff;
  background-color: rgb(0, 28, 64);
  border-color: #007d71;
}

.datepicker table tr td.active:active,
.datepicker table tr td.active.highlighted:active,
.datepicker table tr td.active.active,
.datepicker table tr td.active.highlighted.active,
.open > .dropdown-toggle.datepicker table tr td.active,
.open > .dropdown-toggle.datepicker table tr td.active.highlighted {
  color: #ffffff;
  background-color: rgb(0, 28, 64);
  border-color: #007d71;
}

.datepicker table tr td.active:active:hover,
.datepicker table tr td.active.highlighted:active:hover,
.datepicker table tr td.active.active:hover,
.datepicker table tr td.active.highlighted.active:hover,
.open > .dropdown-toggle.datepicker table tr td.active:hover,
.open > .dropdown-toggle.datepicker table tr td.active.highlighted:hover,
.datepicker table tr td.active:active:focus,
.datepicker table tr td.active.highlighted:active:focus,
.datepicker table tr td.active.active:focus,
.datepicker table tr td.active.highlighted.active:focus,
.open > .dropdown-toggle.datepicker table tr td.active:focus,
.open > .dropdown-toggle.datepicker table tr td.active.highlighted:focus,
.datepicker table tr td.active:active.focus,
.datepicker table tr td.active.highlighted:active.focus,
.datepicker table tr td.active.active.focus,
.datepicker table tr td.active.highlighted.active.focus,
.open > .dropdown-toggle.datepicker table tr td.active.focus,
.open > .dropdown-toggle.datepicker table tr td.active.highlighted.focus {
  color: #ffffff;
  background-color: #007d71;
  border-color: #193c5a;
}

.datepicker table tr td.active:active,
.datepicker table tr td.active.highlighted:active,
.datepicker table tr td.active.active,
.datepicker table tr td.active.highlighted.active,
.open > .dropdown-toggle.datepicker table tr td.active,
.open > .dropdown-toggle.datepicker table tr td.active.highlighted {
  background-image: none;
}

.datepicker table tr td.active.disabled:hover,
.datepicker table tr td.active.highlighted.disabled:hover,
.datepicker table tr td.active[disabled]:hover,
.datepicker table tr td.active.highlighted[disabled]:hover,
fieldset[disabled] .datepicker table tr td.active:hover,
fieldset[disabled] .datepicker table tr td.active.highlighted:hover,
.datepicker table tr td.active.disabled:focus,
.datepicker table tr td.active.highlighted.disabled:focus,
.datepicker table tr td.active[disabled]:focus,
.datepicker table tr td.active.highlighted[disabled]:focus,
fieldset[disabled] .datepicker table tr td.active:focus,
fieldset[disabled] .datepicker table tr td.active.highlighted:focus,
.datepicker table tr td.active.disabled.focus,
.datepicker table tr td.active.highlighted.disabled.focus,
.datepicker table tr td.active[disabled].focus,
.datepicker table tr td.active.highlighted[disabled].focus,
fieldset[disabled] .datepicker table tr td.active.focus,
fieldset[disabled] .datepicker table tr td.active.highlighted.focus {
  background-color: #428bca;
  border-color: #357ebd;
}

.datepicker table tr td span {
  display: block;
  width: 23%;
  height: 54px;
  line-height: 54px;
  float: left;
  margin: 1%;
  cursor: pointer;
  border-radius: 4px;
}

.datepicker table tr td span:hover {
  background: #eeeeee;
}

.datepicker table tr td span.disabled,
.datepicker table tr td span.disabled:hover {
  background: none;
  color: #999999;
  cursor: default;
}

.datepicker table tr td span.active,
.datepicker table tr td span.active:hover,
.datepicker table tr td span.active.disabled,
.datepicker table tr td span.active.disabled:hover {
  color: #ffffff;
  background-color: #428bca;
  border-color: #357ebd;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}

.datepicker table tr td span.active:focus,
.datepicker table tr td span.active:hover:focus,
.datepicker table tr td span.active.disabled:focus,
.datepicker table tr td span.active.disabled:hover:focus,
.datepicker table tr td span.active.focus,
.datepicker table tr td span.active:hover.focus,
.datepicker table tr td span.active.disabled.focus,
.datepicker table tr td span.active.disabled:hover.focus {
  color: #ffffff;
  background-color: rgb(0, 28, 64);
  border-color: #193c5a;
}

.datepicker table tr td span.active:hover,
.datepicker table tr td span.active:hover:hover,
.datepicker table tr td span.active.disabled:hover,
.datepicker table tr td span.active.disabled:hover:hover {
  color: #ffffff;
  background-color: rgb(0, 28, 64);
  border-color: #007d71;
}

.datepicker table tr td span.active:active,
.datepicker table tr td span.active:hover:active,
.datepicker table tr td span.active.disabled:active,
.datepicker table tr td span.active.disabled:hover:active,
.datepicker table tr td span.active.active,
.datepicker table tr td span.active:hover.active,
.datepicker table tr td span.active.disabled.active,
.datepicker table tr td span.active.disabled:hover.active,
.open > .dropdown-toggle.datepicker table tr td span.active,
.open > .dropdown-toggle.datepicker table tr td span.active:hover,
.open > .dropdown-toggle.datepicker table tr td span.active.disabled,
.open > .dropdown-toggle.datepicker table tr td span.active.disabled:hover {
  color: #ffffff;
  background-color: rgb(0, 28, 64);
  border-color: #007d71;
}

.datepicker table tr td span.active:active:hover,
.datepicker table tr td span.active:hover:active:hover,
.datepicker table tr td span.active.disabled:active:hover,
.datepicker table tr td span.active.disabled:hover:active:hover,
.datepicker table tr td span.active.active:hover,
.datepicker table tr td span.active:hover.active:hover,
.datepicker table tr td span.active.disabled.active:hover,
.datepicker table tr td span.active.disabled:hover.active:hover,
.open > .dropdown-toggle.datepicker table tr td span.active:hover,
.open > .dropdown-toggle.datepicker table tr td span.active:hover:hover,
.open > .dropdown-toggle.datepicker table tr td span.active.disabled:hover,
.open > .dropdown-toggle.datepicker table tr td span.active.disabled:hover:hover,
.datepicker table tr td span.active:active:focus,
.datepicker table tr td span.active:hover:active:focus,
.datepicker table tr td span.active.disabled:active:focus,
.datepicker table tr td span.active.disabled:hover:active:focus,
.datepicker table tr td span.active.active:focus,
.datepicker table tr td span.active:hover.active:focus,
.datepicker table tr td span.active.disabled.active:focus,
.datepicker table tr td span.active.disabled:hover.active:focus,
.open > .dropdown-toggle.datepicker table tr td span.active:focus,
.open > .dropdown-toggle.datepicker table tr td span.active:hover:focus,
.open > .dropdown-toggle.datepicker table tr td span.active.disabled:focus,
.open > .dropdown-toggle.datepicker table tr td span.active.disabled:hover:focus,
.datepicker table tr td span.active:active.focus,
.datepicker table tr td span.active:hover:active.focus,
.datepicker table tr td span.active.disabled:active.focus,
.datepicker table tr td span.active.disabled:hover:active.focus,
.datepicker table tr td span.active.active.focus,
.datepicker table tr td span.active:hover.active.focus,
.datepicker table tr td span.active.disabled.active.focus,
.datepicker table tr td span.active.disabled:hover.active.focus,
.open > .dropdown-toggle.datepicker table tr td span.active.focus,
.open > .dropdown-toggle.datepicker table tr td span.active:hover.focus,
.open > .dropdown-toggle.datepicker table tr td span.active.disabled.focus,
.open > .dropdown-toggle.datepicker table tr td span.active.disabled:hover.focus {
  color: #ffffff;
  background-color: #007d71;
  border-color: #193c5a;
}

.datepicker table tr td span.active:active,
.datepicker table tr td span.active:hover:active,
.datepicker table tr td span.active.disabled:active,
.datepicker table tr td span.active.disabled:hover:active,
.datepicker table tr td span.active.active,
.datepicker table tr td span.active:hover.active,
.datepicker table tr td span.active.disabled.active,
.datepicker table tr td span.active.disabled:hover.active,
.open > .dropdown-toggle.datepicker table tr td span.active,
.open > .dropdown-toggle.datepicker table tr td span.active:hover,
.open > .dropdown-toggle.datepicker table tr td span.active.disabled,
.open > .dropdown-toggle.datepicker table tr td span.active.disabled:hover {
  background-image: none;
}

.datepicker table tr td span.active.disabled:hover,
.datepicker table tr td span.active:hover.disabled:hover,
.datepicker table tr td span.active.disabled.disabled:hover,
.datepicker table tr td span.active.disabled:hover.disabled:hover,
.datepicker table tr td span.active[disabled]:hover,
.datepicker table tr td span.active:hover[disabled]:hover,
.datepicker table tr td span.active.disabled[disabled]:hover,
.datepicker table tr td span.active.disabled:hover[disabled]:hover,
fieldset[disabled] .datepicker table tr td span.active:hover,
fieldset[disabled] .datepicker table tr td span.active:hover:hover,
fieldset[disabled] .datepicker table tr td span.active.disabled:hover,
fieldset[disabled] .datepicker table tr td span.active.disabled:hover:hover,
.datepicker table tr td span.active.disabled:focus,
.datepicker table tr td span.active:hover.disabled:focus,
.datepicker table tr td span.active.disabled.disabled:focus,
.datepicker table tr td span.active.disabled:hover.disabled:focus,
.datepicker table tr td span.active[disabled]:focus,
.datepicker table tr td span.active:hover[disabled]:focus,
.datepicker table tr td span.active.disabled[disabled]:focus,
.datepicker table tr td span.active.disabled:hover[disabled]:focus,
fieldset[disabled] .datepicker table tr td span.active:focus,
fieldset[disabled] .datepicker table tr td span.active:hover:focus,
fieldset[disabled] .datepicker table tr td span.active.disabled:focus,
fieldset[disabled] .datepicker table tr td span.active.disabled:hover:focus,
.datepicker table tr td span.active.disabled.focus,
.datepicker table tr td span.active:hover.disabled.focus,
.datepicker table tr td span.active.disabled.disabled.focus,
.datepicker table tr td span.active.disabled:hover.disabled.focus,
.datepicker table tr td span.active[disabled].focus,
.datepicker table tr td span.active:hover[disabled].focus,
.datepicker table tr td span.active.disabled[disabled].focus,
.datepicker table tr td span.active.disabled:hover[disabled].focus,
fieldset[disabled] .datepicker table tr td span.active.focus,
fieldset[disabled] .datepicker table tr td span.active:hover.focus,
fieldset[disabled] .datepicker table tr td span.active.disabled.focus,
fieldset[disabled] .datepicker table tr td span.active.disabled:hover.focus {
  background-color: #428bca;
  border-color: #357ebd;
}

.datepicker table tr td span.old,
.datepicker table tr td span.new {
  color: #999999;
}

.datepicker .datepicker-switch {
  width: 145px;
}

.datepicker .datepicker-switch,
.datepicker .prev,
.datepicker .next,
.datepicker tfoot tr th {
  cursor: pointer;
}

.datepicker .datepicker-switch:hover,
.datepicker .prev:hover,
.datepicker .next:hover,
.datepicker tfoot tr th:hover {
  background: #eeeeee;
}

.datepicker .cw {
  font-size: 10px;
  width: 12px;
  padding: 0 2px 0 5px;
  vertical-align: middle;
}

.input-group.date .input-group-addon {
  cursor: pointer;
}

.input-daterange {
  width: 100%;
}

.input-daterange input {
  text-align: center;
}

.input-daterange input:first-child {
  border-radius: 3px 0 0 3px;
}

.input-daterange input:last-child {
  border-radius: 0 3px 3px 0;
}

.input-daterange .input-group-addon {
  width: auto;
  min-width: 16px;
  padding: 4px 5px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  text-shadow: 0 1px 0 #fff;
  vertical-align: middle;
  background-color: #eeeeee;
  border: solid #cccccc;
  border-width: 1px 0;
  margin-left: -5px;
  margin-right: -5px;
}

.datepicker.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  right: auto;
  z-index: 1000;
  float: left;
  display: none;
  min-width: 160px;
  list-style: none;
  background-color: #ffffff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: .357rem;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  background-clip: padding-box;
  *border-right-width: 2px;
  *border-bottom-width: 2px;
  color: #333333;
  font-size: 13px;
  line-height: 1.42857143;
}

.datepicker.dropdown-menu th,
.datepicker.datepicker-inline th,
.datepicker.dropdown-menu td,
.datepicker.datepicker-inline td {
  padding: 0px 5px;
}

body.stop-scrolling {
  height: 100%;
  overflow: hidden;
}

.sweet-overlay {
  background-color: rgba(255, 255, 255, 0.9);
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  display: none;
  outline: none !important;
  z-index: 10000;
}

.sweet-alert {
  background-color: white;
  width: 478px;
  padding: 20px;
  border-radius: .357rem;
  text-align: center;
  position: fixed;
  left: 50%;
  top: 50%;
  margin-left: -259px;
  margin-top: -200px;
  -webkit-box-shadow: 0 4px 23px 5px rgba(0, 0, 0, 0.2), 0 2px 6px rgba(0, 0, 0, 0.15);
          box-shadow: 0 4px 23px 5px rgba(0, 0, 0, 0.2), 0 2px 6px rgba(0, 0, 0, 0.15);
  overflow: hidden;
  display: none;
  z-index: 99999;
}

@media all and (max-width: 540px) {
  .sweet-alert {
    width: auto;
    margin-left: 0;
    margin-right: 0;
    left: 15px;
    right: 15px;
  }
}

.sweet-alert h2 {
  color: #575757;
  font-size: 30px;
  text-align: center;
  font-weight: 500;
  text-transform: none;
  position: relative;
  margin: 15px 0 0 0;
  padding: 0;
  line-height: 40px;
  display: block;
}

.sweet-alert p {
  color: #797979;
  font-size: 16px;
  text-align: center;
  font-weight: 400;
  position: relative;
  text-align: inherit;
  float: none;
  margin: 0;
  padding: 0;
  line-height: normal;
}

.sweet-alert fieldset {
  border: none;
  position: relative;
}

.sweet-alert .sa-error-container {
  background-color: #f1f1f1;
  margin-left: -17px;
  margin-right: -17px;
  overflow: hidden;
  padding: 0 10px;
  max-height: 0;
  -webkit-transition: padding 0.15s, max-height 0.15s;
  -o-transition: padding 0.15s, max-height 0.15s;
  transition: padding 0.15s, max-height 0.15s;
}

.sweet-alert .sa-error-container.show {
  padding: 10px 0;
  max-height: 100px;
  -webkit-transition: padding 0.25s, max-height 0.25s;
  -o-transition: padding 0.25s, max-height 0.25s;
  transition: padding 0.25s, max-height 0.25s;
}

.sweet-alert .sa-error-container .icon {
  display: inline-block;
  width: 24px;
  height: 24px;
  border-radius: .357rem;
  background-color: #ea7d7d;
  color: white;
  line-height: 24px;
  text-align: center;
  margin-right: 3px;
}

.sweet-alert .sa-error-container p {
  display: inline-block;
}

.sweet-alert .sa-input-error {
  position: absolute;
  top: 22px;
  right: 10px;
  width: 20px;
  height: 20px;
  opacity: 0;
  -webkit-transform: scale(0.5);
  -ms-transform: scale(0.5);
      transform: scale(0.5);
  -webkit-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
      transform-origin: 50% 50%;
  -webkit-transition: all 0.1s;
  -o-transition: all 0.1s;
  transition: all 0.1s;
}

.sweet-alert .sa-input-error::before, .sweet-alert .sa-input-error::after {
  content: "";
  width: 20px;
  height: 6px;
  background-color: #f06e57;
  border-radius: .357rem;
  position: absolute;
  top: 50%;
  margin-top: -4px;
  left: 50%;
  margin-left: -9px;
}

.sweet-alert .sa-input-error::before {
  -webkit-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
      transform: rotate(-45deg);
}

.sweet-alert .sa-input-error::after {
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
      transform: rotate(45deg);
}

.sweet-alert .sa-input-error.show {
  opacity: 1;
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
      transform: scale(1);
}

.sweet-alert input {
  display: none;
  width: 100%;
  height: 40px;
  padding: 8px 12px 4px;
  font-size: 14px;
  font-weight: 500;
  line-height: 1.44;
  color: #555;
  margin-top: 10px;
  margin-bottom: 17px;
  background-color: #fff;
  background-image: none;
  border: 2px solid #ccc;
  border-radius: .357rem;
  -webkit-transition: border-color ease-in-out 0.15s;
  -o-transition: border-color ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s;
}

.sweet-alert input:focus {
  border-color: rgb(0, 28, 64);
  outline: none;
}

.sweet-alert.show-input input {
  display: block;
}

.sweet-alert .sa-confirm-button-container {
  display: inline-block;
  position: relative;
}

.sweet-alert .la-ball-fall {
  position: absolute;
  left: 50%;
  top: 50%;
  margin-left: -27px;
  margin-top: 4px;
  opacity: 0;
  visibility: hidden;
}

.sweet-alert button {
  background-color: rgb(0, 28, 64) !important;
  color: white;
  border: none;
  -webkit-box-shadow: none;
          box-shadow: none;
  font-size: 17px;
  font-weight: 500;
  border-radius: .357rem;
  padding: 8px 20px;
  margin: 26px 5px 0 5px;
  cursor: pointer;
}

.sweet-alert button:focus {
  outline: none;
  -webkit-box-shadow: 0 0 2px rgba(128, 179, 235, 0.5), inset 0 0 0 1px rgba(0, 0, 0, 0.05);
          box-shadow: 0 0 2px rgba(128, 179, 235, 0.5), inset 0 0 0 1px rgba(0, 0, 0, 0.05);
}

.sweet-alert button:hover {
  background-color: #00877a;
}

.sweet-alert button:active {
  background-color: #00635a;
}

.sweet-alert button.cancel {
  background-color: #C1C1C1 !important;
}

.sweet-alert button.cancel:hover {
  background-color: #b9b9b9;
}

.sweet-alert button.cancel:active {
  background-color: #a8a7a7;
}

.sweet-alert button.cancel:focus {
  -webkit-box-shadow: rgba(197, 205, 211, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.0470588) 0px 0px 0px 1px inset !important;
          box-shadow: rgba(197, 205, 211, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.0470588) 0px 0px 0px 1px inset !important;
}

.sweet-alert button[disabled] {
  opacity: .6;
  cursor: default;
}

.sweet-alert button.confirm[disabled] {
  color: transparent;
}

.sweet-alert button.confirm[disabled] ~ .la-ball-fall {
  opacity: 1;
  visibility: visible;
  -webkit-transition-delay: 0s;
       -o-transition-delay: 0s;
          transition-delay: 0s;
}

.sweet-alert button::-moz-focus-inner {
  border: 0;
}

.sweet-alert[data-has-cancel-button=false] button {
  -webkit-box-shadow: none !important;
          box-shadow: none !important;
}

.sweet-alert[data-has-confirm-button=false][data-has-cancel-button=false] {
  padding-bottom: 40px;
}

.sweet-alert .sa-icon {
  width: 80px;
  height: 80px;
  border: 4px solid gray;
  border-radius: 40px;
  border-radius: .357rem;
  margin: 20px auto;
  padding: 0;
  position: relative;
  -webkit-box-sizing: content-box;
          box-sizing: content-box;
}

.sweet-alert .sa-icon.sa-error {
  border-color: #F27474;
}

.sweet-alert .sa-icon.sa-error .sa-x-mark {
  position: relative;
  display: block;
}

.sweet-alert .sa-icon.sa-error .sa-line {
  position: absolute;
  height: 5px;
  width: 47px;
  background-color: #F27474;
  display: block;
  top: 37px;
  border-radius: 2px;
}

.sweet-alert .sa-icon.sa-error .sa-line.sa-left {
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
      transform: rotate(45deg);
  left: 17px;
}

.sweet-alert .sa-icon.sa-error .sa-line.sa-right {
  -webkit-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
      transform: rotate(-45deg);
  right: 16px;
}

.sweet-alert .sa-icon.sa-warning {
  border-color: #F8BB86;
}

.sweet-alert .sa-icon.sa-warning .sa-body {
  position: absolute;
  width: 5px;
  height: 47px;
  left: 50%;
  top: 10px;
  border-radius: 2px;
  margin-left: -2px;
  background-color: #F8BB86;
}

.sweet-alert .sa-icon.sa-warning .sa-dot {
  position: absolute;
  width: 7px;
  height: 7px;
  border-radius: .357rem;
  margin-left: -3px;
  left: 50%;
  bottom: 10px;
  background-color: #F8BB86;
}

.sweet-alert .sa-icon.sa-info {
  border-color: #C9DAE1;
}

.sweet-alert .sa-icon.sa-info::before {
  content: "";
  position: absolute;
  width: 5px;
  height: 29px;
  left: 50%;
  bottom: 17px;
  border-radius: 2px;
  margin-left: -2px;
  background-color: #C9DAE1;
}

.sweet-alert .sa-icon.sa-info::after {
  content: "";
  position: absolute;
  width: 7px;
  height: 7px;
  border-radius: .357rem;
  margin-left: -3px;
  top: 19px;
  background-color: #C9DAE1;
}

.sweet-alert .sa-icon.sa-success {
  border-color: #A5DC86;
}

.sweet-alert .sa-icon.sa-success::before, .sweet-alert .sa-icon.sa-success::after {
  content: '';
  border-radius: 40px;
  border-radius: .357rem;
  position: absolute;
  width: 60px;
  height: 120px;
  background: white;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
      transform: rotate(45deg);
}

.sweet-alert .sa-icon.sa-success::before {
  border-radius: 120px 0 0 120px;
  top: -7px;
  left: -33px;
  -webkit-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
      transform: rotate(-45deg);
  -webkit-transform-origin: 60px 60px;
  -ms-transform-origin: 60px 60px;
      transform-origin: 60px 60px;
}

.sweet-alert .sa-icon.sa-success::after {
  border-radius: 0 120px 120px 0;
  top: -11px;
  left: 30px;
  -webkit-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
      transform: rotate(-45deg);
  -webkit-transform-origin: 0px 60px;
  -ms-transform-origin: 0px 60px;
      transform-origin: 0px 60px;
}

.sweet-alert .sa-icon.sa-success .sa-placeholder {
  width: 80px;
  height: 80px;
  border: 4px solid rgba(165, 220, 134, 0.2);
  border-radius: 40px;
  border-radius: .357rem;
  -webkit-box-sizing: content-box;
          box-sizing: content-box;
  position: absolute;
  left: -4px;
  top: -4px;
  z-index: 2;
}

.sweet-alert .sa-icon.sa-success .sa-fix {
  width: 5px;
  height: 90px;
  background-color: white;
  position: absolute;
  left: 28px;
  top: 8px;
  z-index: 1;
  -webkit-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
      transform: rotate(-45deg);
}

.sweet-alert .sa-icon.sa-success .sa-line {
  height: 5px;
  background-color: #A5DC86;
  display: block;
  border-radius: 2px;
  position: absolute;
  z-index: 2;
}

.sweet-alert .sa-icon.sa-success .sa-line.sa-tip {
  width: 25px;
  left: 14px;
  top: 46px;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
      transform: rotate(45deg);
}

.sweet-alert .sa-icon.sa-success .sa-line.sa-long {
  width: 47px;
  right: 8px;
  top: 38px;
  -webkit-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
      transform: rotate(-45deg);
}

.sweet-alert .sa-icon.sa-custom {
  background-size: contain;
  border-radius: 0;
  border: none;
  background-position: center center;
  background-repeat: no-repeat;
}

/*
 * Animations
 */
@-webkit-keyframes showSweetAlert {
  0% {
    transform: scale(0.7);
    -webkit-transform: scale(0.7);
  }
  45% {
    transform: scale(1.05);
    -webkit-transform: scale(1.05);
  }
  80% {
    transform: scale(0.95);
    -webkit-transform: scale(0.95);
  }
  100% {
    transform: scale(1);
    -webkit-transform: scale(1);
  }
}

@keyframes showSweetAlert {
  0% {
    transform: scale(0.7);
    -webkit-transform: scale(0.7);
  }
  45% {
    transform: scale(1.05);
    -webkit-transform: scale(1.05);
  }
  80% {
    transform: scale(0.95);
    -webkit-transform: scale(0.95);
  }
  100% {
    transform: scale(1);
    -webkit-transform: scale(1);
  }
}

@-webkit-keyframes hideSweetAlert {
  0% {
    transform: scale(1);
    -webkit-transform: scale(1);
  }
  100% {
    transform: scale(0.5);
    -webkit-transform: scale(0.5);
  }
}

@keyframes hideSweetAlert {
  0% {
    transform: scale(1);
    -webkit-transform: scale(1);
  }
  100% {
    transform: scale(0.5);
    -webkit-transform: scale(0.5);
  }
}

@-webkit-keyframes slideFromTop {
  0% {
    top: 0%;
  }
  100% {
    top: 50%;
  }
}

@keyframes slideFromTop {
  0% {
    top: 0%;
  }
  100% {
    top: 50%;
  }
}

@-webkit-keyframes slideToTop {
  0% {
    top: 50%;
  }
  100% {
    top: 0%;
  }
}

@keyframes slideToTop {
  0% {
    top: 50%;
  }
  100% {
    top: 0%;
  }
}

@-webkit-keyframes slideFromBottom {
  0% {
    top: 70%;
  }
  100% {
    top: 50%;
  }
}

@keyframes slideFromBottom {
  0% {
    top: 70%;
  }
  100% {
    top: 50%;
  }
}

@-webkit-keyframes slideToBottom {
  0% {
    top: 50%;
  }
  100% {
    top: 70%;
  }
}

@keyframes slideToBottom {
  0% {
    top: 50%;
  }
  100% {
    top: 70%;
  }
}

.showSweetAlert[data-animation=pop] {
  -webkit-animation: showSweetAlert 0.3s;
  animation: showSweetAlert 0.3s;
}

.showSweetAlert[data-animation=none] {
  -webkit-animation: none;
  animation: none;
}

.showSweetAlert[data-animation=slide-from-top] {
  -webkit-animation: slideFromTop 0.3s;
  animation: slideFromTop 0.3s;
}

.showSweetAlert[data-animation=slide-from-bottom] {
  -webkit-animation: slideFromBottom 0.3s;
  animation: slideFromBottom 0.3s;
}

.hideSweetAlert[data-animation=pop] {
  -webkit-animation: hideSweetAlert 0.2s;
  animation: hideSweetAlert 0.2s;
}

.hideSweetAlert[data-animation=none] {
  -webkit-animation: none;
  animation: none;
}

.hideSweetAlert[data-animation=slide-from-top] {
  -webkit-animation: slideToTop 0.4s;
  animation: slideToTop 0.4s;
}

.hideSweetAlert[data-animation=slide-from-bottom] {
  -webkit-animation: slideToBottom 0.3s;
  animation: slideToBottom 0.3s;
}

@-webkit-keyframes animateSuccessTip {
  0% {
    width: 0;
    left: 1px;
    top: 19px;
  }
  54% {
    width: 0;
    left: 1px;
    top: 19px;
  }
  70% {
    width: 50px;
    left: -8px;
    top: 37px;
  }
  84% {
    width: 17px;
    left: 21px;
    top: 48px;
  }
  100% {
    width: 25px;
    left: 14px;
    top: 45px;
  }
}

@keyframes animateSuccessTip {
  0% {
    width: 0;
    left: 1px;
    top: 19px;
  }
  54% {
    width: 0;
    left: 1px;
    top: 19px;
  }
  70% {
    width: 50px;
    left: -8px;
    top: 37px;
  }
  84% {
    width: 17px;
    left: 21px;
    top: 48px;
  }
  100% {
    width: 25px;
    left: 14px;
    top: 45px;
  }
}

@-webkit-keyframes animateSuccessLong {
  0% {
    width: 0;
    right: 46px;
    top: 54px;
  }
  65% {
    width: 0;
    right: 46px;
    top: 54px;
  }
  84% {
    width: 55px;
    right: 0px;
    top: 35px;
  }
  100% {
    width: 47px;
    right: 8px;
    top: 38px;
  }
}

@keyframes animateSuccessLong {
  0% {
    width: 0;
    right: 46px;
    top: 54px;
  }
  65% {
    width: 0;
    right: 46px;
    top: 54px;
  }
  84% {
    width: 55px;
    right: 0px;
    top: 35px;
  }
  100% {
    width: 47px;
    right: 8px;
    top: 38px;
  }
}

@-webkit-keyframes rotatePlaceholder {
  0% {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
  }
  5% {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
  }
  12% {
    transform: rotate(-405deg);
    -webkit-transform: rotate(-405deg);
  }
  100% {
    transform: rotate(-405deg);
    -webkit-transform: rotate(-405deg);
  }
}

@keyframes rotatePlaceholder {
  0% {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
  }
  5% {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
  }
  12% {
    transform: rotate(-405deg);
    -webkit-transform: rotate(-405deg);
  }
  100% {
    transform: rotate(-405deg);
    -webkit-transform: rotate(-405deg);
  }
}

.animateSuccessTip {
  -webkit-animation: animateSuccessTip 0.75s;
  animation: animateSuccessTip 0.75s;
}

.animateSuccessLong {
  -webkit-animation: animateSuccessLong 0.75s;
  animation: animateSuccessLong 0.75s;
}

.sa-icon.sa-success.animate::after {
  -webkit-animation: rotatePlaceholder 4.25s ease-in;
  animation: rotatePlaceholder 4.25s ease-in;
}

@-webkit-keyframes animateErrorIcon {
  0% {
    transform: rotateX(100deg);
    -webkit-transform: rotateX(100deg);
    opacity: 0;
  }
  100% {
    transform: rotateX(0deg);
    -webkit-transform: rotateX(0deg);
    opacity: 1;
  }
}

@keyframes animateErrorIcon {
  0% {
    transform: rotateX(100deg);
    -webkit-transform: rotateX(100deg);
    opacity: 0;
  }
  100% {
    transform: rotateX(0deg);
    -webkit-transform: rotateX(0deg);
    opacity: 1;
  }
}

.animateErrorIcon {
  -webkit-animation: animateErrorIcon 0.5s;
  animation: animateErrorIcon 0.5s;
}

@-webkit-keyframes animateXMark {
  0% {
    transform: scale(0.4);
    -webkit-transform: scale(0.4);
    margin-top: 26px;
    opacity: 0;
  }
  50% {
    transform: scale(0.4);
    -webkit-transform: scale(0.4);
    margin-top: 26px;
    opacity: 0;
  }
  80% {
    transform: scale(1.15);
    -webkit-transform: scale(1.15);
    margin-top: -6px;
  }
  100% {
    transform: scale(1);
    -webkit-transform: scale(1);
    margin-top: 0;
    opacity: 1;
  }
}

@keyframes animateXMark {
  0% {
    transform: scale(0.4);
    -webkit-transform: scale(0.4);
    margin-top: 26px;
    opacity: 0;
  }
  50% {
    transform: scale(0.4);
    -webkit-transform: scale(0.4);
    margin-top: 26px;
    opacity: 0;
  }
  80% {
    transform: scale(1.15);
    -webkit-transform: scale(1.15);
    margin-top: -6px;
  }
  100% {
    transform: scale(1);
    -webkit-transform: scale(1);
    margin-top: 0;
    opacity: 1;
  }
}

.animateXMark {
  -webkit-animation: animateXMark 0.5s;
  animation: animateXMark 0.5s;
}

@-webkit-keyframes pulseWarning {
  0% {
    border-color: #F8D486;
  }
  100% {
    border-color: #F8BB86;
  }
}

@keyframes pulseWarning {
  0% {
    border-color: #F8D486;
  }
  100% {
    border-color: #F8BB86;
  }
}

.pulseWarning {
  -webkit-animation: pulseWarning 0.75s infinite alternate;
  animation: pulseWarning 0.75s infinite alternate;
}

@-webkit-keyframes pulseWarningIns {
  0% {
    background-color: #F8D486;
  }
  100% {
    background-color: #F8BB86;
  }
}

@keyframes pulseWarningIns {
  0% {
    background-color: #F8D486;
  }
  100% {
    background-color: #F8BB86;
  }
}

.pulseWarningIns {
  -webkit-animation: pulseWarningIns 0.75s infinite alternate;
  animation: pulseWarningIns 0.75s infinite alternate;
}

@-webkit-keyframes rotate-loading {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

@keyframes rotate-loading {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

.notify-alert {
  -webkit-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.23), 0 3px 10px rgba(0, 0, 0, 0.16);
          box-shadow: 0 3px 10px rgba(0, 0, 0, 0.23), 0 3px 10px rgba(0, 0, 0, 0.16);
  border: 0 !important;
  max-width: 400px;
  color: #FFF;
}

.notify-alert.alert-success {
  background-color: #28a745;
}

.notify-alert.alert-info {
  background-color: #17a2b8;
}

.notify-alert.alert-warning {
  background-color: #ffce3a;
}

.notify-alert.alert-danger {
  background-color: #e04b59;
}

.notify-alert button[data-notify="dismiss"] {
  margin-left: 5px;
  outline: none !important;
}

.select2-container {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  display: inline-block;
  margin: 0;
  position: relative;
  vertical-align: middle;
}

.select2-container .select2-selection--single {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  cursor: pointer;
  display: block;
  height: 40px;
  -moz-user-select: none;
   -ms-user-select: none;
       user-select: none;
  -webkit-user-select: none;
  -webkit-transition: all 0.15s ease-in-out;
  -o-transition: all 0.15s ease-in-out;
  transition: all 0.15s ease-in-out;
}

.select2-container .select2-selection--single .select2-selection__rendered {
  display: block;
  padding-left: 8px;
  padding-right: 20px;
  overflow: hidden;
  -o-text-overflow: ellipsis;
     text-overflow: ellipsis;
  white-space: nowrap;
}

.select2-container .select2-selection--single .select2-selection__clear {
  position: relative;
}

.select2-container[dir="rtl"] .select2-selection--single .select2-selection__rendered {
  padding-right: 8px;
  padding-left: 20px;
}

.select2-container .select2-selection--multiple {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  cursor: pointer;
  display: block;
  min-height: 32px;
  -moz-user-select: none;
   -ms-user-select: none;
       user-select: none;
  -webkit-user-select: none;
}

.select2-container .select2-selection--multiple .select2-selection__rendered {
  display: inline-block;
  overflow: hidden;
  padding-left: 8px;
  -o-text-overflow: ellipsis;
     text-overflow: ellipsis;
  white-space: nowrap;
}

.select2-container .select2-search--inline {
  float: left;
}

.select2-container .select2-search--inline .select2-search__field {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  border: none;
  font-size: 100%;
  margin-top: 7px;
  padding: 0;
}

.select2-container .select2-search--inline .select2-search__field::-webkit-search-cancel-button {
  -webkit-appearance: none;
}

.select2-dropdown {
  background-color: white;
  border: 2px solid rgb(0, 28, 64);
  border-radius: 4px;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  display: block;
  position: absolute;
  left: -100000px;
  width: 100%;
  z-index: 1051;
}

.select2-results {
  display: block;
}

.select2-results__options {
  list-style: none;
  margin: 0;
  padding: 0;
}

.select2-results__option {
  padding: 6px;
  -moz-user-select: none;
   -ms-user-select: none;
       user-select: none;
  -webkit-user-select: none;
}

.select2-results__option[aria-selected] {
  cursor: pointer;
}

.select2-container--open .select2-dropdown {
  left: 0;
}

.select2-container--open .select2-dropdown--above {
  border-bottom: none;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

.select2-container--open .select2-dropdown--below {
  border-top: none;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.select2-search--dropdown {
  display: block;
  padding: 4px;
}

.select2-search--dropdown .select2-search__field {
  padding: 4px;
  width: 100%;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  outline: none;
}

.select2-search--dropdown .select2-search__field::-webkit-search-cancel-button {
  -webkit-appearance: none;
}

.select2-search--dropdown.select2-search--hide {
  display: none;
}

.select2-close-mask {
  border: 0;
  margin: 0;
  padding: 0;
  display: block;
  position: fixed;
  left: 0;
  top: 0;
  min-height: 100%;
  min-width: 100%;
  height: auto;
  width: auto;
  opacity: 0;
  z-index: 99;
  background-color: #fff;
  filter: alpha(opacity=0);
}

.select2-hidden-accessible {
  border: 0 !important;
  clip: rect(0 0 0 0) !important;
  height: 1px !important;
  margin: -1px !important;
  overflow: hidden !important;
  padding: 0 !important;
  position: absolute !important;
  width: 1px !important;
}

.select2-container--default .select2-selection--single {
  background-color: #fff;
  border: 2px solid #ccc;
  border-radius: .357rem;
  outline: none;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
  color: #444;
  line-height: 37px;
}

.select2-container--default .select2-selection--single .select2-selection__clear {
  cursor: pointer;
  float: right;
  font-weight: bold;
}

.select2-container--default .select2-selection--single .select2-selection__placeholder {
  color: #999;
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
  height: 40px;
  position: absolute;
  top: 1px;
  right: 5px;
  width: 20px;
}

.select2-container--default .select2-selection--single .select2-selection__arrow b {
  border-color: #888 transparent transparent transparent;
  border-style: solid;
  border-width: 5px 4px 0 4px;
  height: 0;
  left: 50%;
  margin-left: -4px;
  margin-top: -2px;
  position: absolute;
  top: 50%;
  width: 0;
}

.select2-container--default[dir="rtl"] .select2-selection--single .select2-selection__clear {
  float: left;
}

.select2-container--default[dir="rtl"] .select2-selection--single .select2-selection__arrow {
  left: 1px;
  right: auto;
}

.select2-container--default.select2-container--disabled .select2-selection--single {
  background-color: #eee;
  cursor: default;
}

.select2-container--default.select2-container--disabled .select2-selection--single .select2-selection__clear {
  display: none;
}

.select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
  border-color: transparent transparent #888 transparent;
  border-width: 0 4px 5px 4px;
}

.select2-container--default .select2-selection--multiple {
  background-color: white;
  border: 2px solid #ccc;
  border-radius: 4px;
  cursor: text;
}

.select2-container--default .select2-selection--multiple .select2-selection__rendered {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  list-style: none;
  margin: 0;
  padding: 0 8px;
  width: 100%;
}

.select2-container--default .select2-selection--multiple .select2-selection__placeholder {
  color: #999;
  margin-top: 5px;
  float: left;
}

.select2-container--default .select2-selection--multiple .select2-selection__clear {
  cursor: pointer;
  float: right;
  font-weight: bold;
  margin-top: 5px;
  margin-right: 10px;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice {
  background-color: rgb(0, 28, 64);
  color: #FFF;
  border-radius: .357rem;
  cursor: default;
  float: left;
  margin-right: 6px;
  margin-top: 6px;
  padding: 1px 6px;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
  color: #FFF;
  cursor: pointer;
  display: inline-block;
  font-weight: bold;
  margin-right: 4px;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
  color: #eee;
}

.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice,
.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__placeholder,
.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-search--inline {
  float: right;
}

.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice {
  margin-left: 5px;
  margin-right: auto;
}

.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice__remove {
  margin-left: 2px;
  margin-right: auto;
}

.select2-container--default.select2-container--focus .select2-selection--multiple {
  border-color: rgb(0, 28, 64);
  outline: 0;
}

.select2-container--default.select2-container--disabled .select2-selection--multiple {
  background-color: #eee;
  cursor: default;
}

.select2-container--default.select2-container--disabled .select2-selection__choice__remove {
  display: none;
}

.select2-container--default.select2-container--open.select2-container--above .select2-selection--single,
.select2-container--default.select2-container--open.select2-container--above .select2-selection--multiple {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border-color: rgb(0, 28, 64);
}

.select2-container--default.select2-container--open.select2-container--below .select2-selection--single,
.select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple {
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  border-color: rgb(0, 28, 64);
}

.select2-container--default .select2-search--dropdown .select2-search__field {
  border: 1px solid rgb(0, 28, 64);
  border-radius: .357rem;
}

.select2-container--default .select2-search--inline .select2-search__field {
  background: transparent;
  border: none;
  outline: 0;
  -webkit-box-shadow: none;
          box-shadow: none;
  -webkit-appearance: textfield;
}

.select2-container--default .select2-results > .select2-results__options {
  max-height: 200px;
  overflow-y: auto;
}

.select2-container--default .select2-results__option[role=group] {
  padding: 0;
}

.select2-container--default .select2-results__option[aria-disabled=true] {
  color: #999;
}

.select2-container--default .select2-results__option[aria-selected=true] {
  background-color: #ddd;
}

.select2-container--default .select2-results__option .select2-results__option {
  padding-left: 1em;
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__group {
  padding-left: 0;
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option {
  margin-left: -1em;
  padding-left: 2em;
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
  margin-left: -2em;
  padding-left: 3em;
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
  margin-left: -3em;
  padding-left: 4em;
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
  margin-left: -4em;
  padding-left: 5em;
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
  margin-left: -5em;
  padding-left: 6em;
}

.select2-container--default .select2-results__option--highlighted[aria-selected] {
  background-color: rgb(0, 28, 64);
  color: white;
}

.select2-container--default .select2-results__group {
  cursor: default;
  display: block;
  padding: 6px;
}

.select2-container--classic .select2-selection--single {
  background-color: #f7f7f7;
  border: 2px solid rgb(0, 28, 64);
  border-radius: .357rem;
  outline: 0;
  background-image: -o-linear-gradient(top, white 50%, #eeeeee 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(50%, white), to(#eeeeee));
  background-image: linear-gradient(to bottom, white 50%, #eeeeee 100%);
  background-repeat: repeat-x;
}

.select2-container--classic .select2-selection--single:focus {
  border: 1px solid rgb(0, 28, 64);
}

.select2-container--classic .select2-selection--single .select2-selection__rendered {
  color: #444;
  line-height: 28px;
}

.select2-container--classic .select2-selection--single .select2-selection__clear {
  cursor: pointer;
  float: right;
  font-weight: bold;
  margin-right: 10px;
}

.select2-container--classic .select2-selection--single .select2-selection__placeholder {
  color: #999;
}

.select2-container--classic .select2-selection--single .select2-selection__arrow {
  background-color: #ddd;
  border: none;
  border-left: 1px solid #aaa;
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
  height: 26px;
  position: absolute;
  top: 1px;
  right: 1px;
  width: 20px;
  background-image: -o-linear-gradient(top, #eeeeee 50%, #cccccc 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(50%, #eeeeee), to(#cccccc));
  background-image: linear-gradient(to bottom, #eeeeee 50%, #cccccc 100%);
  background-repeat: repeat-x;
}

.select2-container--classic .select2-selection--single .select2-selection__arrow b {
  border-color: #888 transparent transparent transparent;
  border-style: solid;
  border-width: 5px 4px 0 4px;
  height: 0;
  left: 50%;
  margin-left: -4px;
  margin-top: -2px;
  position: absolute;
  top: 50%;
  width: 0;
}

.select2-container--classic[dir="rtl"] .select2-selection--single .select2-selection__clear {
  float: left;
}

.select2-container--classic[dir="rtl"] .select2-selection--single .select2-selection__arrow {
  border: none;
  border-right: 1px solid #aaa;
  border-radius: 0;
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
  left: 1px;
  right: auto;
}

.select2-container--classic.select2-container--open .select2-selection--single {
  border: 1px solid rgb(0, 28, 64);
}

.select2-container--classic.select2-container--open .select2-selection--single .select2-selection__arrow {
  background: transparent;
  border: none;
}

.select2-container--classic.select2-container--open .select2-selection--single .select2-selection__arrow b {
  border-color: transparent transparent #888 transparent;
  border-width: 0 4px 5px 4px;
}

.select2-container--classic.select2-container--open.select2-container--above .select2-selection--single {
  border-top: none;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  background-image: -o-linear-gradient(top, white 0%, #eeeeee 50%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(white), color-stop(50%, #eeeeee));
  background-image: linear-gradient(to bottom, white 0%, #eeeeee 50%);
  background-repeat: repeat-x;
}

.select2-container--classic.select2-container--open.select2-container--below .select2-selection--single {
  border-bottom: none;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  background-image: -o-linear-gradient(top, #eeeeee 50%, white 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(50%, #eeeeee), to(white));
  background-image: linear-gradient(to bottom, #eeeeee 50%, white 100%);
  background-repeat: repeat-x;
}

.select2-container--classic .select2-selection--multiple {
  background-color: white;
  border: 1px solid #aaa;
  border-radius: 4px;
  cursor: text;
  outline: 0;
}

.select2-container--classic .select2-selection--multiple:focus {
  border: 1px solid rgb(0, 28, 64);
}

.select2-container--classic .select2-selection--multiple .select2-selection__rendered {
  list-style: none;
  margin: 0;
  padding: 0 5px;
}

.select2-container--classic .select2-selection--multiple .select2-selection__clear {
  display: none;
}

.select2-container--classic .select2-selection--multiple .select2-selection__choice {
  background-color: #e4e4e4;
  border: 1px solid #aaa;
  border-radius: 4px;
  cursor: default;
  float: left;
  margin-right: 5px;
  margin-top: 5px;
  padding: 0 5px;
}

.select2-container--classic .select2-selection--multiple .select2-selection__choice__remove {
  color: #888;
  cursor: pointer;
  display: inline-block;
  font-weight: bold;
  margin-right: 2px;
}

.select2-container--classic .select2-selection--multiple .select2-selection__choice__remove:hover {
  color: #555;
}

.select2-container--classic[dir="rtl"] .select2-selection--multiple .select2-selection__choice {
  float: right;
}

.select2-container--classic[dir="rtl"] .select2-selection--multiple .select2-selection__choice {
  margin-left: 5px;
  margin-right: auto;
}

.select2-container--classic[dir="rtl"] .select2-selection--multiple .select2-selection__choice__remove {
  margin-left: 2px;
  margin-right: auto;
}

.select2-container--classic.select2-container--open .select2-selection--multiple {
  border: 1px solid rgb(0, 28, 64);
}

.select2-container--classic.select2-container--open.select2-container--above .select2-selection--multiple {
  border-top: none;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.select2-container--classic.select2-container--open.select2-container--below .select2-selection--multiple {
  border-bottom: none;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

.select2-container--classic .select2-search--dropdown .select2-search__field {
  border: 1px solid #aaa;
  outline: 0;
}

.select2-container--classic .select2-search--inline .select2-search__field {
  outline: 0;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.select2-container--classic .select2-dropdown {
  background-color: white;
  border: 1px solid transparent;
}

.select2-container--classic .select2-dropdown--above {
  border-bottom: none;
}

.select2-container--classic .select2-dropdown--below {
  border-top: none;
}

.select2-container--classic .select2-results > .select2-results__options {
  max-height: 200px;
  overflow-y: auto;
}

.select2-container--classic .select2-results__option[role=group] {
  padding: 0;
}

.select2-container--classic .select2-results__option[aria-disabled=true] {
  color: grey;
}

.select2-container--classic .select2-results__option--highlighted[aria-selected] {
  background-color: #3875d7;
  color: white;
}

.select2-container--classic .select2-results__group {
  cursor: default;
  display: block;
  padding: 6px;
}

.select2-container--classic.select2-container--open .select2-dropdown {
  border-color: rgb(0, 28, 64);
}

.pace {
  pointer-events: none;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.pace .pace-progress {
  background: #FFD43B;
  position: fixed;
  z-index: 2000;
  top: 0;
  right: 100%;
  width: 100%;
  height: 3px;
}

.pace .pace-progress-inner {
  display: block;
  position: absolute;
  right: 0;
  width: 100px;
  height: 100%;
  -webkit-box-shadow: 0 0 10px #96000e, 0 0 5px #96000e;
          box-shadow: 0 0 10px #96000e, 0 0 5px #96000e;
  opacity: 1;
  -webkit-transform: rotate(3deg) translate(0px, -4px);
      -ms-transform: rotate(3deg) translate(0px, -4px);
          transform: rotate(3deg) translate(0px, -4px);
}

.pace-inactive {
  display: none;
}

.jqvmap-label {
  position: absolute;
  display: none;
  border-radius: .357rem;
  background: #292929;
  color: white;
  font-family: sans-serif, Verdana;
  font-size: smaller;
  padding: 3px;
}

.jqvmap-zoomin, .jqvmap-zoomout {
  position: absolute;
  left: 10px;
  border-radius: .357rem;
  background: #000000;
  padding: 3px;
  color: white;
  width: 18px;
  height: 18px;
  cursor: pointer;
  line-height: 13px;
  text-align: center;
  font-size: 20px;
}

.jqvmap-zoomin {
  top: 10px;
}

.jqvmap-zoomout {
  top: 30px;
}

.jqvmap-region {
  cursor: pointer;
}

.jqvmap-ajax_response {
  width: 100%;
  height: 500px;
}

/*!
 * FullCalendar v2.5.0 Stylesheet
 * Docs & License: http://fullcalendar.io/
 * (c) 2015 Adam Shaw
 */
.fc {
  direction: ltr;
  text-align: left;
}

.fc-rtl {
  text-align: right;
}

body .fc {
  /* extra precedence to overcome jqui */
  font-size: 1em;
}

/* Colors
--------------------------------------------------------------------------------------------------*/
.fc-unthemed th,
.fc-unthemed td,
.fc-unthemed thead,
.fc-unthemed tbody,
.fc-unthemed .fc-divider,
.fc-unthemed .fc-row,
.fc-unthemed .fc-popover {
  border-color: #ddd;
}

.fc-unthemed .fc-popover {
  background-color: #fff;
}

.fc-unthemed .fc-divider,
.fc-unthemed .fc-popover .fc-header {
  background: #eee;
}

.fc-unthemed .fc-popover .fc-header .fc-close {
  color: #666;
}

.fc-unthemed .fc-today {
  background: rgba(0, 150, 136, 0.2);
}

.fc-highlight {
  /* when user is selecting cells */
  background: #bce8f1;
  opacity: .3;
  filter: alpha(opacity=30);
  /* for IE */
}

.fc-bgevent {
  /* default look for background events */
  background: #8fdf82;
  opacity: .3;
  filter: alpha(opacity=30);
  /* for IE */
}

.fc-nonbusiness {
  /* default look for non-business-hours areas */
  /* will inherit .fc-bgevent's styles */
  background: #d7d7d7;
}

/* Icons (inline elements with styled text that mock arrow icons)
--------------------------------------------------------------------------------------------------*/
.fc-icon {
  display: inline-block;
  width: 1em;
  height: 1em;
  line-height: 1em;
  font-size: 1em;
  text-align: center;
  overflow: hidden;
  font-family: "Courier New", Courier, monospace;
  /* don't allow browser text-selection */
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/*
Acceptable font-family overrides for individual icons:
  "Arial", sans-serif
  "Times New Roman", serif

NOTE: use percentage font sizes or else old IE chokes
*/
.fc-icon:after {
  position: relative;
  margin: 0 -1em;
  /* ensures character will be centered, regardless of width */
}

.fc-icon-left-single-arrow:after {
  content: "\02039";
  font-weight: bold;
  font-size: 200%;
  top: -7%;
  left: 3%;
}

.fc-icon-right-single-arrow:after {
  content: "\0203A";
  font-weight: bold;
  font-size: 200%;
  top: -7%;
  left: -3%;
}

.fc-icon-left-double-arrow:after {
  content: "\000AB";
  font-size: 160%;
  top: -7%;
}

.fc-icon-right-double-arrow:after {
  content: "\000BB";
  font-size: 160%;
  top: -7%;
}

.fc-icon-left-triangle:after {
  content: "\25C4";
  font-size: 125%;
  top: 3%;
  left: -2%;
}

.fc-icon-right-triangle:after {
  content: "\25BA";
  font-size: 125%;
  top: 3%;
  left: 2%;
}

.fc-icon-down-triangle:after {
  content: "\25BC";
  font-size: 125%;
  top: 2%;
}

.fc-icon-x:after {
  content: "\000D7";
  font-size: 200%;
  top: 6%;
}

/* Buttons (styled <button> tags, normalized to work cross-browser)
--------------------------------------------------------------------------------------------------*/
.fc button {
  /* force height to include the border and padding */
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  /* dimensions */
  margin: 0;
  height: 2.1em;
  padding: 0 .6em;
  /* text & cursor */
  font-size: 15px;
  /* normalize */
  font-weight: 500;
  white-space: nowrap;
  cursor: pointer;
  text-transform: uppercase;
}

/* Firefox has an annoying inner border */
.fc button::-moz-focus-inner {
  margin: 0;
  padding: 0;
}

.fc-state-default {
  /* non-theme */
  border: 1px solid;
}

.fc-state-default.fc-corner-left {
  /* non-theme */
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}

.fc-state-default.fc-corner-right {
  /* non-theme */
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}

/* icons in buttons */
.fc button .fc-icon {
  /* non-theme */
  position: relative;
  top: -0.05em;
  /* seems to be a good adjustment across browsers */
  margin: 0 .2em;
  vertical-align: middle;
}

/*
  button states
  borrowed from twitter bootstrap (http://twitter.github.com/bootstrap/)
*/
.fc-state-default {
  background-color: #f5f5f5;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#e6e6e6));
  background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
  background-repeat: repeat-x;
  border-color: #e6e6e6 #e6e6e6 #bfbfbf;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  color: #333;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  outline: none;
}

.fc-state-hover,
.fc-state-down,
.fc-state-active,
.fc-state-disabled {
  color: #333333;
  background-color: #e6e6e6;
}

.fc-state-hover {
  color: #333333;
  text-decoration: none;
  background-position: 0 -15px;
  -webkit-transition: background-position 0.1s linear;
  -o-transition: background-position 0.1s linear;
  transition: background-position 0.1s linear;
}

.fc-state-down,
.fc-state-active {
  background-color: rgb(0, 28, 64);
  color: #FFF;
  background-image: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.fc-state-disabled {
  cursor: default;
  background-image: none;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
          box-shadow: none;
}

/* Buttons Groups
--------------------------------------------------------------------------------------------------*/
.fc-button-group {
  display: inline-block;
}

/*
every button that is not first in a button group should scootch over one pixel and cover the
previous button's border...
*/
.fc .fc-button-group > * {
  /* extra precedence b/c buttons have margin set to zero */
  float: left;
  margin: 0 0 0 -1px;
}

.fc .fc-button-group > :first-child {
  /* same */
  margin-left: 0;
}

/* Popover
--------------------------------------------------------------------------------------------------*/
.fc-popover {
  position: absolute;
  -webkit-box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
          box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
}

.fc-popover .fc-header {
  /* TODO: be more consistent with fc-head/fc-body */
  padding: 2px 4px;
}

.fc-popover .fc-header .fc-title {
  margin: 0 2px;
}

.fc-popover .fc-header .fc-close {
  cursor: pointer;
}

.fc-ltr .fc-popover .fc-header .fc-title,
.fc-rtl .fc-popover .fc-header .fc-close {
  float: left;
}

.fc-rtl .fc-popover .fc-header .fc-title,
.fc-ltr .fc-popover .fc-header .fc-close {
  float: right;
}

/* unthemed */
.fc-unthemed .fc-popover {
  border-width: 1px;
  border-style: solid;
}

.fc-unthemed .fc-popover .fc-header .fc-close {
  font-size: .9em;
  margin-top: 2px;
}

/* jqui themed */
.fc-popover > .ui-widget-header + .ui-widget-content {
  border-top: 0;
  /* where they meet, let the header have the border */
}

/* Misc Reusable Components
--------------------------------------------------------------------------------------------------*/
.fc-divider {
  border-style: solid;
  border-width: 1px;
}

hr.fc-divider {
  height: 0;
  margin: 0;
  padding: 0 0 2px;
  /* height is unreliable across browsers, so use padding */
  border-width: 1px 0;
}

.fc-clear {
  clear: both;
}

.fc-bg,
.fc-bgevent-skeleton,
.fc-highlight-skeleton,
.fc-helper-skeleton {
  /* these element should always cling to top-left/right corners */
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
}

.fc-bg {
  bottom: 0;
  /* strech bg to bottom edge */
}

.fc-bg table {
  height: 100%;
  /* strech bg to bottom edge */
}

/* Tables
--------------------------------------------------------------------------------------------------*/
.fc table {
  width: 100%;
  table-layout: fixed;
  border-collapse: collapse;
  border-spacing: 0;
  font-size: 1em;
  /* normalize cross-browser */
  font-weight: 500;
}

.fc th {
  text-align: center;
}

.fc th,
.fc td {
  border-style: solid;
  border-width: 1px;
  padding: 0;
  vertical-align: top;
}

.fc td.fc-today {
  border-style: double;
  /* overcome neighboring borders */
}

/* Fake Table Rows
--------------------------------------------------------------------------------------------------*/
.fc .fc-row {
  /* extra precedence to overcome themes w/ .ui-widget-content forcing a 1px border */
  /* no visible border by default. but make available if need be (scrollbar width compensation) */
  border-style: solid;
  border-width: 0;
}

.fc-row table {
  /* don't put left/right border on anything within a fake row.
     the outer tbody will worry about this */
  border-left: 0 hidden transparent;
  border-right: 0 hidden transparent;
  /* no bottom borders on rows */
  border-bottom: 0 hidden transparent;
}

.fc-row:first-child table {
  border-top: 0 hidden transparent;
  /* no top border on first row */
}

/* Day Row (used within the header and the DayGrid)
--------------------------------------------------------------------------------------------------*/
.fc-row {
  position: relative;
}

.fc-row .fc-bg {
  z-index: 1;
}

/* highlighting cells & background event skeleton */
.fc-row .fc-bgevent-skeleton,
.fc-row .fc-highlight-skeleton {
  bottom: 0;
  /* stretch skeleton to bottom of row */
}

.fc-row .fc-bgevent-skeleton table,
.fc-row .fc-highlight-skeleton table {
  height: 100%;
  /* stretch skeleton to bottom of row */
}

.fc-row .fc-highlight-skeleton td,
.fc-row .fc-bgevent-skeleton td {
  border-color: transparent;
}

.fc-row .fc-bgevent-skeleton {
  z-index: 2;
}

.fc-row .fc-highlight-skeleton {
  z-index: 3;
}

/*
row content (which contains day/week numbers and events) as well as "helper" (which contains
temporary rendered events).
*/
.fc-row .fc-content-skeleton {
  position: relative;
  z-index: 4;
  padding-bottom: 2px;
  /* matches the space above the events */
}

.fc-row .fc-helper-skeleton {
  z-index: 5;
}

.fc-row .fc-content-skeleton td,
.fc-row .fc-helper-skeleton td {
  /* see-through to the background below */
  background: none;
  /* in case <td>s are globally styled */
  border-color: transparent;
  /* don't put a border between events and/or the day number */
  border-bottom: 0;
}

.fc-row .fc-content-skeleton tbody td,
.fc-row .fc-helper-skeleton tbody td {
  /* don't put a border between event cells */
  border-top: 0;
}

/* Scrolling Container
--------------------------------------------------------------------------------------------------*/
.fc-scroller {
  /* this class goes on elements for guaranteed vertical scrollbars */
  overflow-y: scroll;
  overflow-x: hidden;
}

.fc-scroller > * {
  /* we expect an immediate inner element */
  position: relative;
  /* re-scope all positions */
  width: 100%;
  /* hack to force re-sizing this inner element when scrollbars appear/disappear */
  overflow: hidden;
  /* don't let negative margins or absolute positioning create further scroll */
}

/* Global Event Styles
--------------------------------------------------------------------------------------------------*/
.fc-event {
    position: relative;
    display: block;
    font-size: 14px;
    padding: 10px;
    line-height: 1.3;
    border-radius: .357rem;
    border: 1px solid rgb(0, 28, 64);
    background-color: rgb(0, 28, 64);
    font-weight: 300;
    margin-bottom: 10px;
    cursor: all-scroll;
}

/* overpower some of bootstrap's and jqui's styles on <a> tags */
.fc-event,
.fc-event:hover,
.ui-widget .fc-event {
  color: #fff;
  /* default TEXT color */
  text-decoration: none;
  text-align: center;
  /* if <a> has an href */
}

.fc-event[href],
.fc-event.fc-draggable {
  cursor: pointer;
  /* give events with links and draggable events a hand mouse pointer */
}

.fc-not-allowed,
.fc-not-allowed .fc-event {
  /* to override an event's custom cursor */
  cursor: not-allowed;
}

.fc-event .fc-bg {
  /* the generic .fc-bg already does position */
  z-index: 1;
  background: #fff;
  opacity: .25;
  filter: alpha(opacity=25);
  /* for IE */
}

.fc-event .fc-content {
  position: relative;
  z-index: 2;
}

.fc-event .fc-resizer {
  position: absolute;
  z-index: 3;
}

/* Horizontal Events
--------------------------------------------------------------------------------------------------*/
/* events that are continuing to/from another week. kill rounded corners and butt up against edge */
.fc-ltr .fc-h-event.fc-not-start,
.fc-rtl .fc-h-event.fc-not-end {
  margin-left: 0;
  border-left-width: 0;
  padding-left: 1px;
  /* replace the border with padding */
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.fc-ltr .fc-h-event.fc-not-end,
.fc-rtl .fc-h-event.fc-not-start {
  margin-right: 0;
  border-right-width: 0;
  padding-right: 1px;
  /* replace the border with padding */
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

/* resizer */
.fc-h-event .fc-resizer {
  /* positioned it to overcome the event's borders */
  top: -1px;
  bottom: -1px;
  left: -1px;
  right: -1px;
  width: 5px;
}

/* left resizer  */
.fc-ltr .fc-h-event .fc-start-resizer,
.fc-ltr .fc-h-event .fc-start-resizer:before,
.fc-ltr .fc-h-event .fc-start-resizer:after,
.fc-rtl .fc-h-event .fc-end-resizer,
.fc-rtl .fc-h-event .fc-end-resizer:before,
.fc-rtl .fc-h-event .fc-end-resizer:after {
  right: auto;
  /* ignore the right and only use the left */
  cursor: w-resize;
}

/* right resizer */
.fc-ltr .fc-h-event .fc-end-resizer,
.fc-ltr .fc-h-event .fc-end-resizer:before,
.fc-ltr .fc-h-event .fc-end-resizer:after,
.fc-rtl .fc-h-event .fc-start-resizer,
.fc-rtl .fc-h-event .fc-start-resizer:before,
.fc-rtl .fc-h-event .fc-start-resizer:after {
  left: auto;
  /* ignore the left and only use the right */
  cursor: e-resize;
}

/* DayGrid events
----------------------------------------------------------------------------------------------------
We use the full "fc-day-grid-event" class instead of using descendants because the event won't
be a descendant of the grid when it is being dragged.
*/
.fc-day-grid-event {
  margin: 1px 2px 0;
  /* spacing between events and edges */
  padding: 0 1px;
}

.fc-day-grid-event .fc-content {
  text-align: center;
  white-space: nowrap;
  overflow: hidden;
  color: white;
  padding: 5px;
}

.fc-day-grid-event .fc-time {
  font-weight: bold;
}

.fc-day-grid-event .fc-resizer {
  /* enlarge the default hit area */
  left: -3px;
  right: -3px;
  width: 7px;
}

/* Event Limiting
--------------------------------------------------------------------------------------------------*/
/* "more" link that represents hidden events */
a.fc-more {
  margin: 1px 3px;
  font-size: .85em;
  cursor: pointer;
  text-decoration: none;
}

a.fc-more:hover {
  text-decoration: underline;
}

.fc-limited {
  /* rows and cells that are hidden because of a "more" link */
  display: none;
}

/* popover that appears when "more" link is clicked */
.fc-day-grid .fc-row {
  z-index: 1;
  /* make the "more" popover one higher than this */
}

.fc-more-popover {
  z-index: 2;
  width: 220px;
}

.fc-more-popover .fc-event-container {
  padding: 10px;
}

/* Toolbar
--------------------------------------------------------------------------------------------------*/
.fc-toolbar {
  text-align: center;
  margin-bottom: 1em;
}

.fc-toolbar .fc-left {
  float: left;
}

.fc-toolbar .fc-right {
  float: right;
}

.fc-toolbar .fc-center {
  display: inline-block;
}

/* the things within each left/right/center section */
.fc .fc-toolbar > * > * {
  /* extra precedence to override button border margins */
  float: left;
  margin-left: .75em;
}

/* the first thing within each left/center/right section */
.fc .fc-toolbar > * > :first-child {
  /* extra precedence to override button border margins */
  margin-left: 0;
}

/* title text */
.fc-toolbar h2 {
  margin: 0;
  text-transform: uppercase;
  font-size: 26px;
  color: rgb(0, 28, 64);
}

/* button layering (for border precedence) */
.fc-toolbar button {
  position: relative;
}

.fc-toolbar .fc-state-hover,
.fc-toolbar .ui-state-hover {
  z-index: 2;
}

.fc-toolbar .fc-state-down {
  z-index: 3;
}

.fc-toolbar .fc-state-active,
.fc-toolbar .ui-state-active {
  z-index: 4;
}

.fc-toolbar button:focus {
  z-index: 5;
}

/* View Structure
--------------------------------------------------------------------------------------------------*/
/* undo twitter bootstrap's box-sizing rules. normalizes positioning techniques */
/* don't do this for the toolbar because we'll want bootstrap to style those buttons as some pt */
.fc-view-container *,
.fc-view-container *:before,
.fc-view-container *:after {
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
}

.fc-view,
.fc-view > table {
  /* so dragged elements can be above the view's main element */
  position: relative;
  z-index: 1;
}

/* BasicView
--------------------------------------------------------------------------------------------------*/
/* day row structure */
.fc-basicWeek-view .fc-content-skeleton,
.fc-basicDay-view .fc-content-skeleton {
  /* we are sure there are no day numbers in these views, so... */
  padding-top: 1px;
  /* add a pixel to make sure there are 2px padding above events */
  padding-bottom: 1em;
  /* ensure a space at bottom of cell for user selecting/clicking */
}

.fc-basic-view .fc-body .fc-row {
  min-height: 4em;
  /* ensure that all rows are at least this tall */
}

/* a "rigid" row will take up a constant amount of height because content-skeleton is absolute */
.fc-row.fc-rigid {
  overflow: hidden;
}

.fc-row.fc-rigid .fc-content-skeleton {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
}

/* week and day number styling */
.fc-basic-view .fc-week-number,
.fc-basic-view .fc-day-number {
  padding: 0 2px;
}

.fc-basic-view td.fc-week-number span,
.fc-basic-view td.fc-day-number {
  padding-top: 2px;
  padding-bottom: 2px;
}

.fc-basic-view .fc-week-number {
  text-align: center;
}

.fc-basic-view .fc-week-number span {
  /* work around the way we do column resizing and ensure a minimum width */
  display: inline-block;
  min-width: 1.25em;
}

.fc-ltr .fc-basic-view .fc-day-number {
  text-align: right;
}

.fc-rtl .fc-basic-view .fc-day-number {
  text-align: left;
}

.fc-day-number.fc-other-month {
  opacity: 0.3;
  filter: alpha(opacity=30);
  /* for IE */
  /* opacity with small font can sometimes look too faded
     might want to set the 'color' property instead
     making day-numbers bold also fixes the problem */
}

/* AgendaView all-day area
--------------------------------------------------------------------------------------------------*/
.fc-agenda-view .fc-day-grid {
  position: relative;
  z-index: 2;
  /* so the "more.." popover will be over the time grid */
}

.fc-agenda-view .fc-day-grid .fc-row {
  min-height: 3em;
  /* all-day section will never get shorter than this */
}

.fc-agenda-view .fc-day-grid .fc-row .fc-content-skeleton {
  padding-top: 1px;
  /* add a pixel to make sure there are 2px padding above events */
  padding-bottom: 1em;
  /* give space underneath events for clicking/selecting days */
}

/* TimeGrid axis running down the side (for both the all-day area and the slot area)
--------------------------------------------------------------------------------------------------*/
.fc .fc-axis {
  /* .fc to overcome default cell styles */
  vertical-align: middle;
  padding: 0 4px;
  white-space: nowrap;
}

.fc-ltr .fc-axis {
  text-align: right;
}

.fc-rtl .fc-axis {
  text-align: left;
}

.ui-widget td.fc-axis {
  font-weight: normal;
  /* overcome jqui theme making it bold */
}

/* TimeGrid Structure
--------------------------------------------------------------------------------------------------*/
.fc-time-grid-container,
.fc-time-grid {
  /* so slats/bg/content/etc positions get scoped within here */
  position: relative;
  z-index: 1;
}

.fc-time-grid {
  min-height: 100%;
  /* so if height setting is 'auto', .fc-bg stretches to fill height */
}

.fc-time-grid table {
  /* don't put outer borders on slats/bg/content/etc */
  border: 0 hidden transparent;
}

.fc-time-grid > .fc-bg {
  z-index: 1;
}

.fc-time-grid .fc-slats,
.fc-time-grid > hr {
  /* the <hr> AgendaView injects when grid is shorter than scroller */
  position: relative;
  z-index: 2;
}

.fc-time-grid .fc-bgevent-skeleton,
.fc-time-grid .fc-content-skeleton {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
}

.fc-time-grid .fc-bgevent-skeleton {
  z-index: 3;
}

.fc-time-grid .fc-highlight-skeleton {
  z-index: 4;
}

.fc-time-grid .fc-content-skeleton {
  z-index: 5;
}

.fc-time-grid .fc-helper-skeleton {
  z-index: 6;
}

/* TimeGrid Slats (lines that run horizontally)
--------------------------------------------------------------------------------------------------*/
.fc-time-grid .fc-slats td {
  height: 1.5em;
  border-bottom: 0;
  /* each cell is responsible for its top border */
}

.fc-time-grid .fc-slats .fc-minor td {
  border-top-style: dotted;
}

.fc-time-grid .fc-slats .ui-widget-content {
  /* for jqui theme */
  background: none;
  /* see through to fc-bg */
}

/* TimeGrid Highlighting Slots
--------------------------------------------------------------------------------------------------*/
.fc-time-grid .fc-highlight-container {
  /* a div within a cell within the fc-highlight-skeleton */
  position: relative;
  /* scopes the left/right of the fc-highlight to be in the column */
}

.fc-time-grid .fc-highlight {
  position: absolute;
  left: 0;
  right: 0;
  /* top and bottom will be in by JS */
}

/* TimeGrid Event Containment
--------------------------------------------------------------------------------------------------*/
.fc-time-grid .fc-event-container,
.fc-time-grid .fc-bgevent-container {
  /* a div within a cell within the fc-bgevent-skeleton */
  position: relative;
}

.fc-ltr .fc-time-grid .fc-event-container {
  /* space on the sides of events for LTR (default) */
  margin: 0 2.5% 0 2px;
}

.fc-rtl .fc-time-grid .fc-event-container {
  /* space on the sides of events for RTL */
  margin: 0 2px 0 2.5%;
}

.fc-time-grid .fc-event,
.fc-time-grid .fc-bgevent {
  position: absolute;
  z-index: 1;
  /* scope inner z-index's */
}

.fc-time-grid .fc-bgevent {
  /* background events always span full width */
  left: 0;
  right: 0;
}

/* Generic Vertical Event
--------------------------------------------------------------------------------------------------*/
.fc-v-event.fc-not-start {
  /* events that are continuing from another day */
  /* replace space made by the top border with padding */
  border-top-width: 0;
  padding-top: 1px;
  /* remove top rounded corners */
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.fc-v-event.fc-not-end {
  /* replace space made by the top border with padding */
  border-bottom-width: 0;
  padding-bottom: 1px;
  /* remove bottom rounded corners */
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

/* TimeGrid Event Styling
----------------------------------------------------------------------------------------------------
We use the full "fc-time-grid-event" class instead of using descendants because the event won't
be a descendant of the grid when it is being dragged.
*/
.fc-time-grid-event {
  overflow: hidden;
  /* don't let the bg flow over rounded corners */
}

.fc-time-grid-event .fc-time,
.fc-time-grid-event .fc-title {
  padding: 0 1px;
}

.fc-time-grid-event .fc-time {
  font-size: .85em;
  white-space: nowrap;
}

/* short mode, where time and title are on the same line */
.fc-time-grid-event.fc-short .fc-content {
  /* don't wrap to second line (now that contents will be inline) */
  white-space: nowrap;
}

.fc-time-grid-event.fc-short .fc-time,
.fc-time-grid-event.fc-short .fc-title {
  /* put the time and title on the same line */
  display: inline-block;
  vertical-align: top;
}

.fc-time-grid-event.fc-short .fc-time span {
  display: none;
  /* don't display the full time text... */
}

.fc-time-grid-event.fc-short .fc-time:before {
  content: attr(data-start);
  /* ...instead, display only the start time */
}

.fc-time-grid-event.fc-short .fc-time:after {
  content: "\000A0-\000A0";
  /* seperate with a dash, wrapped in nbsp's */
}

.fc-time-grid-event.fc-short .fc-title {
  font-size: .85em;
  /* make the title text the same size as the time */
  padding: 0;
  /* undo padding from above */
}

/* resizer */
.fc-time-grid-event .fc-resizer {
  left: 0;
  right: 0;
  bottom: 0;
  height: 8px;
  overflow: hidden;
  line-height: 8px;
  font-size: 11px;
  font-family: monospace;
  text-align: center;
  cursor: s-resize;
}

.fc-time-grid-event .fc-resizer:after {
  content: "=";
}

::-moz-selection {
  color: #FFF;
  background-color: rgb(0, 28, 64)
}

::selection {
  color: #FFF;
  background-color:rgb(0, 28, 64)
}

@media (min-width: 768px) {
  .app.sidenav-toggled .app-content {
    margin-left: 0;
  }
  .app.sidenav-toggled .app-sidebar {
    left: -230px;
  }
  .app.sidenav-toggled .app-sidebar__overlay {
    visibility: hidden;
  }
}

@media (max-width: 767px) {
  .app {
    overflow-x: hidden;
  }
  .app .app-sidebar {
    left: -250px;
  }
  .app .app-sidebar__overlay {
    visibility: hidden;
  }
  .app.sidenav-toggled .app-content {
    margin-left: 0;
  }
  .app.sidenav-toggled .app-sidebar {
    left: 0;
  }
  .app.sidenav-toggled .app-sidebar__overlay {
    visibility: visible;
  }
}

.app-content {
  min-height: calc(100vh - 50px);
  padding: 10px;
  background-color: #f5f5f5;
  -webkit-transition: margin-left 0.3s ease;
  -o-transition: margin-left 0.3s ease;
  transition: margin-left 0.3s ease;
}

@media (min-width: 768px) {
  .app-content {
    margin-left: 250px;
    margin-top: 10px;
  }
}

@media (max-width: 767px) {
  .app-content {
    margin-top: 10px;
    min-width: 100%;
  }
}

@media (max-width: 480px) {
  .app-content {
    padding: 15px;
  }
}

@media print {
  .app-content {
    margin: 0;
    padding: 0;
    background-color: #fff;
  }
}

.light-text {
  font-weight: 300 !important;
}

.semibold-text {
  font-weight: 600 !important;
}

.line-head {
  padding-bottom: 10px;
  border-bottom: 1px solid #ddd;
}

/*----- Componant: Top Navigation Bar ----- */
.app-header {
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  width: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  background-color: rgb(0, 28, 64);
  z-index: 1;
  padding-right: 15px;
  padding-left: 15px;
}

@media (min-width: 768px) {
  .app-header {
    padding-right: 30px;
  }
}

@media print {
  .app-header {
    display: none;
  }
}

.app-header__logo {
  -webkit-box-flex: 1;
  -ms-flex: 1 0 auto;
  flex: 1 0 auto;
  color: #FFD43B !important;
  text-align: center;
  padding: 0 15px;
  font-size: 18px;
  font-weight: 400;
  line-height: 50px;
  display: none !important;
}

@media (min-width: 768px) {
  .app-header__logo {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    display: block;
    width: 200px;
    background-color: rgb(0, 28, 64);
    border-bottom: 1px solid rgba(255, 255, 255, 0.137);
  }
}

.app-header__logo:focus, .app-header__logo:hover {
  text-decoration: none;
  color: #fff;
}

.app-sidebar__toggle {
  padding: 10px;
  font-family: fontAwesome;
  color: white;
  line-height: 2.4;
  -webkit-transition: background-color 0.3s ease;
  -o-transition: background-color 0.3s ease;
  transition: background-color 0.3s ease;
  /* background-color: white; */
  /* width: 30px; */
  height: 30px;
  line-height: 15px;
  margin-top: 7px;
  border-radius: .357rem;
}

@media (max-width: 767px) {
  .app-sidebar__toggle {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1;
    right: 20px;
    position: absolute;
    z-index: 1;
  }
}

.app-sidebar__toggle:before {
  content: "\f009";
  font-size: 15px;
}

.bx {
  /* margin: 0; */
  /* font-family: inherit; */
  /* font-size: inherit; */
  /* line-height: inherit; */
  font-size: 20px;
}

.app-nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 0;
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  text-align: right;
}

@media (min-width: 768px) {
  .app-nav {
    -webkit-box-flex: 1;
        -ms-flex: 1 0 auto;
            flex: 1 0 auto;
  }
}

.app-nav__item {
  display: block;
  padding: 15px;
  line-height: 0px;
  color: rgb(0, 28, 64);
  background: rgb(255, 212, 59);
  -webkit-transition: background-color 0.3s ease;
  -o-transition: background-color 0.3s ease;
  transition: background-color 0.3s ease;
}

.app-nav__item:hover, .app-nav__item:focus {
  background: rgba(0, 0, 0, 0.1);
  color: #f6f6f6;
}

.app-search {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-item-align: center;
      align-self: center;
  margin-right: 15px;
  padding: 10px 0;
}

@media (max-width: 480px) {
  .app-search {
    display: none;
  }
}

.app-search__input {
  border: 0;
  padding: 5px 10px;
  padding-right: 30px;
  border-radius: .357rem;
  background-color: rgb(255, 255, 255);
  -webkit-transition: background-color 0.3s ease;
  -o-transition: background-color 0.3s ease;
  transition: background-color 0.3s ease;
}

.app-search__input::-webkit-input-placeholder {
  color: rgba(0, 0, 0, 0.4);
}

.app-search__input:-ms-input-placeholder {
  color: rgba(0, 0, 0, 0.4);
}

.app-search__input::-ms-input-placeholder {
  color: rgba(0, 0, 0, 0.4);
}

.app-search__input::placeholder {
  color: rgba(0, 0, 0, 0.4);
}

.app-search__button {
  position: absolute;
  right: 0;
  top: 10px;
  bottom: 10px;
  padding: 0 10px;
  border: 0;
  color: rgba(0, 0, 0, 0.8);
  background: none;
  cursor: pointer;
}

.app-notification {
  min-width: 270px;
}

.app-notification__title {
  padding: 8px 20px;
  text-align: center;
  background-color: rgba(0, 150, 136, 0.4);
  color: #333;
}

.app-notification__footer {
  padding: 8px 20px;
  text-align: center;
  background-color: #eee;
}

.app-notification__content {
  max-height: 220px;
  overflow-y: auto;
}

.app-notification__content::-webkit-scrollbar {
  width: 6px;
}

.app-notification__content::-webkit-scrollbar-thumb {
  background: rgba(0, 0, 0, 0.2);
}

.app-notification__item {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 8px 20px;
  color: inherit;
  border-bottom: 1px solid #ddd;
  -webkit-transition: background-color 0.3s ease;
  -o-transition: background-color 0.3s ease;
  transition: background-color 0.3s ease;
}

.app-notification__item:focus, .app-notification__item:hover {
  color: inherit;
  text-decoration: none;
  background-color: #e0e0e0;
}

.app-notification__message,
.app-notification__meta {
  margin-bottom: 0;
}

.app-notification__icon {
  padding-right: 10px;
}

.app-notification__message {
  line-height: 1.2;
}

.app-sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  padding-top: 20px;
  width: 250px;
  padding-left: 10px;
  padding-right: 10px;
  overflow: auto;
  z-index: 10;
  background: rgb(0, 28, 64);
  /* box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); */
  /* border-bottom-right-radius: 50px; */
}

.app-sidebar::-webkit-scrollbar {
  width: 6px;
}

.app-sidebar::-webkit-scrollbar-thumb {
  background: rgba(0, 0, 0, 0.2);
}

@media print {
  .app-sidebar {
    display: none;
  }
}

@media (max-width: 767px) {
  .app-sidebar__overlay {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: 9;
  }
}

.app-sidebar__user {
  display: block;
  display: -ms-flexbox;
  /* display: flex; */
  /* -webkit-box-align: center; */
  -ms-flex-align: center;
  align-items: center;
  padding: 10px;
  color: white;
  text-align: center;
}

.app-sidebar__user-avatar {
  background: white;
  border-radius: .357rem;
  width: 70px;
  border: 3px solid white;
  margin-bottom: 10px;
}
.info-tong{
  font-size: 12px !important;
  margin-top: 5px !important;
  border-top: 1px dashed #e8e8e8;
  padding-top: 10px !important;
}
.app-sidebar__user-name {
  font-size: 17px;
  line-height: 1.3;
}

.app-sidebar__user-name,
.app-sidebar__user-designation {
  white-space: nowrap;
  overflow: hidden;
  -o-text-overflow: ellipsis;
     text-overflow: ellipsis;
  margin-bottom: 0;
}

.app-menu {
  margin-bottom: 0;
  padding-bottom: 40px;
}

.app-menu__item {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  border-radius: .375rem;
  margin-bottom: 10px;
  padding: 15px 15px;
  font-size: 1.08em;
  border-left: 0px;
  box-shadow: none;
  -webkit-transition: border-left-color 0.3s ease, background-color 0.3s ease;
  -o-transition: border-left-color 0.3s ease, background-color 0.3s ease;
  transition: border-left-color 0.3s ease, background-color 0.3s ease;
  color: white;
  border: 1px solid transparent;
  /* border-bottom: 1px solid #ddd; */
}

.app-menu__item.active, .app-menu__item:hover, .app-menu__item:focus {
  background: #c6defd;
  text-decoration: none;
  color: rgb(22 22 72);
  box-shadow: none;
  border: 1px solid rgb(22 22 72);
}

.app-menu__icon {
  font-size: 23px;
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 40px;
}

.app-menu__label {
  white-space: nowrap;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  font-size: 15px;
  font-weight: 500;
}

.treeview.is-expanded [data-toggle='treeview'] {
  border-left-color: rgb(0, 28, 64);
  background: #0d1214;
}

.treeview.is-expanded .treeview-menu {
  max-height: 100vh;
}

.treeview.is-expanded .treeview-indicator {
  -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
          transform: rotate(90deg);
}

.treeview-menu {
  max-height: 0;
  overflow: hidden;
  -webkit-transition: max-height 0.3s ease;
  -o-transition: max-height 0.3s ease;
  transition: max-height 0.3s ease;
  background: #2a383e;
}

.treeview-item {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 5px 5px 5px 20px;
  font-size: 1em;
  color: #fff;
}

.treeview-item.active, .treeview-item:hover, .treeview-item:focus {
  background: #0d1214;
  text-decoration: none;
  color: #fff;
}

.treeview-item .icon {
  margin-right: 5px;
}

.treeview-indicator {
  -webkit-transform-origin: center;
      -ms-transform-origin: center;
          transform-origin: center;
  -webkit-transition: -webkit-transform 0.3s ease;
  transition: -webkit-transform 0.3s ease;
  -o-transition: transform 0.3s ease;
  transition: transform 0.3s ease;
  transition: transform 0.3s ease, -webkit-transform 0.3s ease;
}

@media (min-width: 768px) {
  .sidebar-mini.sidenav-toggled .app-sidebar__user-name,
  .sidebar-mini.sidenav-toggled .app-sidebar__user-designation,
  .sidebar-mini.sidenav-toggled .treeview-indicator {
    display: none;
  }
  .sidebar-mini.sidenav-toggled .app-sidebar__user-avatar {
    width: 30px;
    height: 30px;
  }
  .sidebar-mini.sidenav-toggled .app-content {
    margin-left: 50px;
  }
  .sidebar-mini.sidenav-toggled .app-sidebar {
    left: 0;
    width: 70px;
    overflow: hidden;
  }
  .sidebar-mini.sidenav-toggled .app-sidebar:hover {
    overflow: visible;
  }
  .sidebar-mini.sidenav-toggled .app-menu__item {
    overflow: hidden;
    width: 50px;
  }

  .sidebar-mini.sidenav-toggled .app-menu__item:hover .app-menu__label {
    opacity: 1;
  }
  .sidebar-mini.sidenav-toggled .app-menu__item:hover + .treeview-menu {
    visibility: visible;
  }
  .sidebar-mini.sidenav-toggled .app-menu__label {
    display: block;
    position: absolute;
    top: 0;
    left: 50px;
    min-width: auto;
    padding: 12px 20px 12px 20px;
    margin-left: -3px;
    line-height: 1;
    opacity: 0;
    color: black;
    background: #FFD43B;
    border-top-right-radius: 10px;
    /* text-align: center; */
    border-radius: .357rem;
    border-bottom-right-radius: 10px;
  }
  .sidebar-mini.sidenav-toggled .treeview:hover .app-menu__item {
    overflow: visible;
    background: #0d1214;
    border-left-color: rgb(0, 28, 64);
    color: #fff;
  }
  .sidebar-mini.sidenav-toggled .treeview:hover .app-menu__label {
    opacity: 1;
  }
  .sidebar-mini.sidenav-toggled .treeview:hover .treeview-menu {
    max-height: 100vh;
    opacity: 1;
    visibility: visible;
    z-index: 10;
  }
  .sidebar-mini.sidenav-toggled .treeview .app-menu__label {
    border-bottom-right-radius: 0;
  }
  .sidebar-mini.sidenav-toggled .treeview-menu {
    position: absolute;
    left: 50px;
    min-width: 180px;
    padding: 12px 0;
    opacity: 0;
    border-bottom-right-radius: 4px;
    z-index: 9;
    visibility: hidden;
    -webkit-transition: visibility 0.3s ease;
    -o-transition: visibility 0.3s ease;
    transition: visibility 0.3s ease;
  }
}



.dropdown-menu.dropdown-menu-right {
  left: auto;
  right: 0;
}

.dropdown-item .fa,
.dropdown-item .icon {
  margin-right: 5px;
  vertical-align: middle;
}

.btn {
  cursor: pointer;
}


.btn[disabled] {
  cursor: not-allowed;
}

.btn .icon,
.btn .fa {
  font-size: 14px;

  vertical-align: middle;
}
.img-card-person{
  display: block;
  margin-left: auto;
  margin-right:  auto;
  width: 50px;
  height: 50px;
  border-radius: .357rem;
    object-fit: cover;
}
.app-title {
  display: block;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  background-color: #FFF;
  border-radius: .375rem;
  padding: 10px 30px;
  -webkit-box-shadow: 0 1px 2px rgb(0 0 0 / 10%);
  box-shadow: 0 1px 2px rgb(0 0 0 / 10%);
  border-left: 6px solid #FFD43B;
  margin-bottom: 20px;
}

@media print {
  .app-title {
    display: none;
  }
}

@media (max-width: 480px) {
  .app-title {
    /* margin: -15px -15px 15px; */
    /* padding: 20px; */
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
  }
}

.app-title h1 {
  margin: 0;
  font-size: 24px;
  font-weight: 400;
}

.app-title p {
  margin-bottom: 0;
  font-style: italic;
}

@media (max-width: 480px) {
  .app-title p {
    display: none;
  }
}

.app-breadcrumb {
  margin-bottom: 0;
  text-align: right;
  font-weight: 500;
  font-size: 13px;
  text-transform: capitalize;
  padding: 0;
  text-align: left;
  padding: 0;
  background-color: transparent;
}


.tile {
  position: relative;
  background: #ffffff;
  border-radius: .375rem;
  padding: 20px;
  -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
  margin-bottom: 30px;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

@media print {
  .tile {
    border: 1px solid #ddd;
  }
}

.tile.small {
  padding: 0;
}

.tile .overlay {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background-color: rgba(255, 255, 255, 0.9);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  color: #555;
  border-radius: .357rem;
}

.tile .overlay .l-text {
  font-size: 24px;
  margin-top: 15px;
}
#thumbimage{
  border-radius: .357rem;
  object-fit: contain;
  background: white;
}
.tile .tile-title {
  margin-top: 0;
  margin-bottom: 30px;
  font-size: 20px;
  /* text-align: center; */
  border-bottom: 2px solid #FFD43B;
  padding-bottom: 10px;
  /* border-left: 3px solid black; */
  padding-left: 5px;
  color: black;
}

.tile .tile-title-w-btn {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 20px;
}

.tile .tile-title-w-btn p {
  margin: 0;
}

.tile .tile-title-w-btn .title {
  margin: 0;
}

.tile .tile-title-w-btn .side {
  margin-bottom: 0;
  padding-left: 0;
}

.tile .tile-title-w-btn .btn-group {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
}

.tile .tile-footer {
  border-top: 1px solid #ddd;
  padding: 20px 0 0 0;
  margin-top: 10px;
}

/* Custom Checkbox and Radio Buttons */
.animated-checkbox input[type="checkbox"] {
  display: none;
}

.animated-checkbox input[type="checkbox"] + .label-text {
  cursor: pointer !important;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.animated-checkbox input[type="checkbox"] + .label-text:before {
  content: "";
  font-family: "FontAwesome";
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  font-size: 18px;
  -webkit-font-smoothing: antialiased;
  width: 1em;
  display: inline-block;
  margin-right: 2px;
  vertical-align: -2px;
}

.animated-checkbox input[type="checkbox"]:checked + .label-text:before {
  content: "";
  color: rgb(0, 28, 64);
  -webkit-animation: tick 180ms ease-in;
          animation: tick 180ms ease-in;
}

.animated-checkbox input[type="checkbox"]:disabled + .label-text {
  cursor: not-allowed !important;
}

.animated-checkbox input[type="checkbox"]:disabled + .label-text:before {
  content: "";
  color: #ccc;
}

.animated-radio-button input[type="radio"] {
  display: none;
}

.animated-radio-button input[type="radio"] + .label-text {
  cursor: pointer !important;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.animated-radio-button input[type="radio"] + .label-text:before {
  content: "";
  font-family: "FontAwesome";
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  font-size: 18px;
  -webkit-font-smoothing: antialiased;
  width: 1em;
  display: inline-block;
  margin-right: 2px;
  vertical-align: -2px;
}

.animated-radio-button input[type="radio"]:checked + .label-text:before {
  content: "";
  color: rgb(0, 28, 64);
  -webkit-animation: tick 180ms ease-in;
          animation: tick 180ms ease-in;
}

.animated-radio-button input[type="radio"]:disabled + .label-text {
  cursor: not-allowed !important;
}

.animated-radio-button input[type="radio"]:disabled + .label-text:before {
  content: "";
  color: #ccc;
}

@-webkit-keyframes tick {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  90% {
    -webkit-transform: scale(1.4);
            transform: scale(1.4);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

@keyframes tick {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  90% {
    -webkit-transform: scale(1.4);
            transform: scale(1.4);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

.toggle.lg input[type="checkbox"] + .button-indecator:before {
  font-size: 30px;
}

.toggle input[type="checkbox"] {
  display: none;
}

.toggle input[type="checkbox"] + .button-indecator {
  cursor: pointer;
  display: block;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.toggle input[type="checkbox"] + .button-indecator:before {
  content: "";
  font-family: "FontAwesome";
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  font-size: 25px;
  -webkit-font-smoothing: antialiased;
  display: inline-block;
  margin-right: 5px;
  vertical-align: -2px;
}

.toggle input[type="checkbox"]:checked + .button-indecator:before {
  content: "";
  color: rgb(0, 28, 64);
  -webkit-animation: toggleBtn 0.3s ease-in-out;
          animation: toggleBtn 0.3s ease-in-out;
}

.toggle input[type="checkbox"]:disabled + .button-indecator {
  cursor: not-allowed !important;
}

.toggle input[type="checkbox"]:disabled + .button-indecator:before {
  color: #ccc;
}

.toggle-flip input[type="checkbox"] {
  display: none;
}

.toggle-flip input[type="checkbox"] + .flip-indecator {
  position: relative;
  width: 60px;
  height: 30px;
  display: block;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  -webkit-perspective: 90px;
          perspective: 90px;
}

.toggle-flip input[type="checkbox"] + .flip-indecator:before, .toggle-flip input[type="checkbox"] + .flip-indecator:after {
  position: absolute;
  top: 0;
  left: 0;
  display: inline-block;
  width: 100%;
  line-height: 30px;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  text-align: center;
  border-radius: .357rem;
  -webkit-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.toggle-flip input[type="checkbox"] + .flip-indecator:before {
  content: attr(data-toggle-off);
  background-color: #ddd;
}

.toggle-flip input[type="checkbox"] + .flip-indecator:after {
  content: attr(data-toggle-on);
  background-color: rgb(0, 28, 64);
  color: #fff;
  -webkit-transform: rotateY(-180deg);
          transform: rotateY(-180deg);
}

.toggle-flip input[type="checkbox"]:checked + .flip-indecator:before {
  -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
}

.toggle-flip input[type="checkbox"]:checked + .flip-indecator:after {
  -webkit-transform: rotateY(0deg);
          transform: rotateY(0deg);
}

.toggle-flip input[type="checkbox"]:disabled + .flip-indecator {
  cursor: not-allowed !important;
  color: #ccc;
}

@-webkit-keyframes toggleBtn {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-1px);
            transform: translateX(-1px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}

@keyframes toggleBtn {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-1px);
            transform: translateX(-1px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}

.material-half-bg {
  height: 100vh;
  background-color: #e7e7e7;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: -1;
}

.material-half-bg .cover {
  background-color: rgb(0, 28, 64);
  height: 50vh;
}

.m-loader {
  position: relative;
  width: 40px;
}

.m-loader:before {
  content: '';
  display: block;
  padding-top: 100%;
}

.m-circular {
  -webkit-animation: rotate 1.5s linear infinite;
          animation: rotate 1.5s linear infinite;
  height: 100%;
  -webkit-transform-origin: center center;
      -ms-transform-origin: center center;
          transform-origin: center center;
  width: 100%;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
}

.path {
  stroke-dasharray: 1,200;
  stroke-dashoffset: 0;
  stroke: rgb(0, 28, 64);
  -webkit-animation: dash 1.5s ease-in-out infinite;
          animation: dash 1.5s ease-in-out infinite;
  stroke-linecap: round;
}

@-webkit-keyframes rotate {
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

@keyframes rotate {
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

@-webkit-keyframes dash {
  0% {
    stroke-dasharray: 1,200;
    stroke-dashoffset: 0;
  }
  50% {
    stroke-dasharray: 89,200;
    stroke-dashoffset: -35px;
  }
  100% {
    stroke-dasharray: 89,200;
    stroke-dashoffset: -124px;
  }
}

@keyframes dash {
  0% {
    stroke-dasharray: 1,200;
    stroke-dashoffset: 0;
  }
  50% {
    stroke-dasharray: 89,200;
    stroke-dashoffset: -35px;
  }
  100% {
    stroke-dasharray: 89,200;
    stroke-dashoffset: -124px;
  }
}

.btn-spinner {
  display: inline-block;
  z-index: 2000;
  width: 15px;
  height: 15px;
  position: relative;
  top: 2px;
  margin-right: 5px;
  border: solid 2px transparent;
  border-top-color: #fff;
  border-left-color: #fff;
  border-radius: .357rem;
  -webkit-animation: bSpinner 0.8s linear infinite;
          animation: bSpinner 0.8s linear infinite;
}

@-webkit-keyframes bSpinner {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

@keyframes bSpinner {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

.widget-small {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  border-radius: 2px;
  color: #FFF;
  margin-bottom: 30px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
          box-shadow: 0 2px 1px rgba(0, 0, 0, 0.1);
}

.widget-small .icon {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  min-width: 85px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding: 20px;
  background-color: rgba(0, 0, 0, 0.2);
  border-radius: 2px 0 0 2px;
  font-size: 2.5rem;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  box-shadow: 0 2px 1px rgba(0, 0, 0, 0.1);
}

.widget-small .info {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  padding: 0 20px;
  -ms-flex-item-align: center;
      align-self: center;
}

.widget-small .info h4 {
  text-transform: uppercase;
  margin: 0;
  margin-bottom: 5px;
  font-weight: 600;
  color: #d20000;
  font-size: 15px;
}

.widget-small .info p {
  margin: 0;
  font-size: 16px;
}

.widget-small.primary {
  background-color: rgb(0, 28, 64);
}

.widget-small.primary.coloured-icon {
  background-color: #fff;
  color: #2a2a2a;
  border-radius: .375rem;
  padding: 10px;
}

.widget-small.primary.coloured-icon .icon {
  background-color: #b9ffd3;
  color: #22ad56;
  border-radius: .375rem;
}

.widget-small.info {
  background-color: #17a2b8;
}

.widget-small.info.coloured-icon {
  background-color: #fff;
  color: #2a2a2a;
  border-radius: .375rem;
  padding: 10px;
}

.widget-small.info.coloured-icon .icon {
  background-color: #adcbf3;
  color: #1d5aab;
  border-radius: .375rem;
}

.widget-small.warning {
  background-color: #ffc107;
}

.widget-small.warning.coloured-icon {
  background-color: #fff;
  color: #2a2a2a;
  border-radius: .375rem;
  padding:10px;
}

.widget-small.warning.coloured-icon .icon {
  background-color: #fde1c3;
  color: #ff8b07;
  border-radius: .375rem;
}

.widget-small.danger {
  background-color: #dc3545;
}

.widget-small.danger.coloured-icon {
  background-color: #fff;
  color: #2a2a2a;
  border-radius: .375rem;
  padding:10px;
}

.widget-small.danger.coloured-icon .icon {
  background-color: #f9baba;
  color: #de2222;
  border-radius: .375rem;
}

.messanger {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.messanger .messages {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  margin: 10px 0;
  padding: 0 10px;
  max-height: 260px;
  overflow-y: auto;
  overflow-x: hidden;
}

.messanger .messages .message {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 15px;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
}

.messanger .messages .message.me {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: reverse;
      -ms-flex-direction: row-reverse;
          flex-direction: row-reverse;
}

.messanger .messages .message.me img {
  margin-right: 0;
  margin-left: 15px;
}

.messanger .messages .message.me .info {
  background-color: rgb(0, 28, 64);
  color: #FFF;
}

.messanger .messages .message.me .info:before {
  display: none;
}

.messanger .messages .message.me .info:after {
  position: absolute;
  right: -13px;
  top: 0;
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 16px 16px 0;
  border-color: transparent rgb(0, 28, 64) transparent transparent;
  -webkit-transform: rotate(270deg);
      -ms-transform: rotate(270deg);
          transform: rotate(270deg);
}

.messanger .messages .message img {
  border-radius: .357rem;
  margin-right: 15px;
}

.messanger .messages .message .info {
  margin: 0;
  background-color: #ddd;
  padding: 5px 10px;
  border-radius: .357rem;
  position: relative;
  -ms-flex-item-align: start;
      align-self: flex-start;
}

.messanger .messages .message .info:before {
  position: absolute;
  left: -14px;
  top: 0;
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 16px 16px 0;
  border-color: transparent #ddd transparent transparent;
}

.messanger .sender {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.messanger .sender input[type="text"] {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  border: 1px solid rgb(0, 28, 64);
  outline: none;
  padding: 5px 10px;
}

.messanger .sender button {
  border-radius: 0;
}

.login-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  min-height: 100vh;
}

.login-content .logo {
  margin-bottom: 40px;
  font-family: "Niconne";
  color: #fff;
}

.login-content .logo h1 {
  font-size: 52px;
  font-weight: 400;
}

.login-content .login-box {
  position: relative;
  min-width: 350px;
  min-height: 390px;
  background-color: #fff;
  -webkit-box-shadow: 0px 29px 147.5px 102.5px rgba(0, 0, 0, 0.05), 0px 29px 95px 0px rgba(0, 0, 0, 0.16);
          box-shadow: 0px 29px 147.5px 102.5px rgba(0, 0, 0, 0.05), 0px 29px 95px 0px rgba(0, 0, 0, 0.16);
  -webkit-perspective: 800px;
          perspective: 800px;
  -webkit-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}

.login-content .login-box .login-head {
  margin-top: 0;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #ddd;
  text-align: center;
}

.login-content .login-box label {
  color: #666;
  font-weight: 700;
}

.login-content .login-box .utility {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 1px;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.login-content .login-box .btn-container {
  margin-bottom: 0;
}

.login-content .login-box .login-form, .login-content .login-box .forget-form {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 40px;
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  -webkit-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}

.login-content .login-box .forget-form {
  opacity: 0;
  -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
}

.login-content .login-box.flipped {
  min-height: 300px;
}

.login-content .login-box.flipped .login-form {
  opacity: 0;
  -webkit-transform: rotateY(-180deg);
          transform: rotateY(-180deg);
}

.login-content .login-box.flipped .forget-form {
  opacity: 1;
  -webkit-transform: rotateY(0deg);
          transform: rotateY(0deg);
}

@media (max-width: 351px) {
  .login-content .login-box {
    min-width: 100%;
  }
  .login-content .login-box .login-form, .login-content .login-box .forget-form {
    width: 100%;
  }
}

.lockscreen-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  min-height: 100vh;
}

.lockscreen-content .logo {
  font-family: "Niconne";
  margin-bottom: 40px;
  color: #fff;
}

.lockscreen-content .logo h1 {
  font-size: 52px;
  font-weight: 400;
}

.lockscreen-content .lock-box {
  position: relative;
  min-width: 320px;
  padding: 20px 40px;
  background-color: #fff;
  -webkit-box-shadow: 0px 29px 147.5px 102.5px rgba(0, 0, 0, 0.05), 0px 29px 95px 0px rgba(0, 0, 0, 0.16);
          box-shadow: 0px 29px 147.5px 102.5px rgba(0, 0, 0, 0.05), 0px 29px 95px 0px rgba(0, 0, 0, 0.16);
  -webkit-perspective: 800px;
          perspective: 800px;
  -webkit-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}

.lockscreen-content .lock-box .user-image {
  border: 3px solid #fff;
  max-width: 100px;
  display: block;
  margin: 0 auto;
}

.lockscreen-content .lock-box .user-name {
  margin-bottom: 2px;
}

.lockscreen-content .lock-box label {
  color: #666;
  font-weight: 700;
}

.page-error {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  min-height: calc(100vh - 110px);
  margin-bottom: 0;
}

.page-error h1 {
  margin: 10px;
  color: #dc3545;
  font-size: 42px;
}

.folder-head {
  padding: 10px;
  margin-bottom: 0 !important;
  border-bottom: 1px solid #ddd;
}

.mailbox-controls {
  margin-bottom: 10px;
  border-bottom: 1px solid #ddd;
  padding: 0 0 10px 5px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.mailbox-controls .animated-checkbox .label-text:before {
  vertical-align: -7px !important;
}

.mail-nav > li > a {
  display: block;
  background-color: #fff;
  color: #2a2a2a;
  border-radius: 0;
  font-weight: 500;
}

.mailbox-messages table tr td {
  border: 0;
  padding: 5px;
}

.mailbox-messages .mail-subject {
  overflow: hidden;
  -o-text-overflow: ellipsis;
     text-overflow: ellipsis;
  white-space: nowrap;
  max-width: 500px;
}

.user .profile {
  margin: -30px -30px 0 -30px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.user .profile .info {
  padding: 30px 60px;
  text-align: center;
  background-color: #fff;
  white-space: nowrap;
  background-color: #404040;
  color: #fff;
}

.user .profile .info img {
  border-radius: .357rem;
  max-width: 110px;
  margin-bottom: 20px;
  margin-top: 10px;
}

.user .profile .cover-image {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  background-image: url(http://placeimg.com/1200/300/nature);
  background-size: cover;
  background-position: center;
  min-height: 300px;
}

.user .user-tabs {
  margin-top: 20px;
}

.user .user-tabs .nav-link {
  border-left: 3px solid transparent;
  padding: 12px 15px;
  border-bottom: 0;
  font-size: 15px;
  border-radius: 0;
}

.user .user-tabs .nav-link.active {
  border-left-color: rgb(0, 28, 64);
  border-bottom: 0;
}

.user .user-tabs .nav-link:hover, .user .user-tabs .nav-link:active {
  background-color: #eee !important;
  border-bottom: 0;
}

.user .tab-content {
  margin: 20px -10px -10px;
}

.user .timeline-post {
  background-color: #fff;
  padding: 20px;
  margin-bottom: 20px;
  -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.user .timeline-post .post-media {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  margin-bottom: 15px;
}

.user .timeline-post .post-media img {
  margin-right: 10px;
}

.user .timeline-post .post-media h5 {
  margin-top: 0;
  margin-bottom: 3px;
  font-size: 15px;
}

.user .timeline-post .post-content {
  margin-bottom: 20px;
}

.user .timeline-post .post-utility {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  list-style: none;
  padding-left: 0;
  margin-bottom: 0;
}

.user .timeline-post .post-utility .likes,
.user .timeline-post .post-utility .shares {
  margin-right: 10px;
}

.user .timeline-post .post-utility .likes a,
.user .timeline-post .post-utility .shares a {
  color: #555;
}

.user .timeline-post .post-utility .comments {
  color: #555;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  text-align: right;
}

.user .user-settings .line-head {
  font-size: 18px;
  margin-bottom: 30px;
  color: #2a2a2a;
}

.user .user-settings label {
  color: #666;
}
.swal-button{
  background: rgb(191 255 184) !important;
  border-radius: .357rem;
  box-shadow: none !important;
  color: rgb(13 136 0) !important;
  border: none;
}
.swal-button--cancel {
  color: #d21010 !important;
  border: none;
  background-color: #ffbdbd !important;
}
.swal-icon--success__hide-corners {
  width: 5px;
  height: 90px;
  background-color: #fff;
  padding: 1px;
  position: absolute;
  left: 28px;
  top: 8px;
  z-index: 1;
  -webkit-transform: rotate(
-45deg
);
  transform: rotate(
-45deg
);
}
.swal-icon--success__line {
  background-color: rgb(78 208 5);
  height: 2px;
}
.swal-icon--success__ring {
  border: 2px solid rgb(78 208 5);
}
.swal-icon--success__ring {
    border: 2px solid rgb(78 208 5);
}
.swal-button:not([disabled]):hover{
  background: transparent;
  color: white;
}
.swal-title{
  color: rgb(0, 0, 0);
}
.haha{
    color: rgb(0, 28, 64) !important;
    background: #ffd43b !important;
    font-weight: 600;
    box-shadow: none !important;
    border: 1px solid;
}
.btn-add{
  background: #9df99d !important;
  color: #003c00 !important;
}
.btn-excel{
  color: #008c04 !important;
  background: #a2ecb5 !important;
}
.swal-icon {
  width: 80px;
  height: 80px;
  border-width: 2px !important;
  border-style: solid;
  border-radius: 50%;
  padding: 0;
  position: relative;
  box-sizing: content-box;
  margin: 20px auto;
}
.swal-icon--error {
  border-color: #d20303 !important;
  -webkit-animation: animateErrorIcon .5s;
  animation: animateErrorIcon .5s;
}
.swal-icon--error__line {
  position: absolute;
  height: 2px !important;
  width: 47px;
  background-color: #d20303 !important;
  display: block;
  top: 37px;
  border-radius: .357rem;
}
.swal-icon--info{
  border-color:rgb(0, 28, 64) !important;
}
.swal-icon--info:after, .swal-icon--info:before{
  background-color: rgb(0, 28, 64);
}
.swal-modal{
 border-radius: .357rem;
}
.trash{
  background: #f7c3c2;
  border: none;
  color: #de0400;
}
.app-menu{
  padding: 5px;
}
.check-active{
  background: green;
  border: none;
  color: white !important;
}
.btn-actv{
  background: green;
 
  color: white !important;
}
.btn-stop-actv{
  background:gray;
  color: white !important;
}
.fc-state-default {
  background: white;
}
.fc-state-hover, .fc-state-down, .fc-state-active, .fc-state-disabled {
  color: rgb(255, 255, 255) !important;
  background:rgb(0, 28, 64);
  border:1px solid rgb(0, 28, 64) !important ;
}
 #clock{

    font-weight: 600;
    color: rgb(0, 0, 0);
    font-size: 13px;

  }
  .man--hinh{
    background-color: white;
    padding: 10px;
    border-radius: .357rem;
  }
  .man--hinh--thanh--toan{
    background-color: white;
    padding: 10px;
    border-left: 1px solid #ddd;
    text-align: left;
    border-radius: .357rem;
  }
  #myInput{
    width: 100%;
    padding: 10px;
    border: 1px solid #dadada;
    border-radius: .357rem;
    background: #f5f5f5;
  }
  table {
    font-family: 'Roboto', sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
.du--lieu-san-pham{
  margin-top: 20px;
}
.tieu--de{
  background-color: #ddd;
  border: 1px solid black;
}
.tieu--de--phan h3{
 
 color: rgb(0, 28, 64) ;
}
.alert {
      padding: 10px;
      background-color: #b1ffb5;
      color: #006906;
      border-radius: .357rem;
      text-align: center;
      font-weight: 500;
      font-size: 15px;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
.so--luong{
background: #f5f5f5;
text-align:center;
}
.so--luong1{
  text-align: center;
  width: 100px;
}
.btn-them{
  display: block;
  width: auto;
  padding: 10px;
  font-size: 15px;
  line-height: 1.5;
  color: rgb(255, 212, 59);
  background: #001C40;
  border: 1px solid #001C40;
}
.control-all-money{
  font-size: 25px;
  font-weight: 600;
  color: rgb(209, 0, 0);
}
.control-all-money-total{
  font-size: 20px;
  font-weight: 600;
  color:var(--green);
}
.control-all-money-tamtinh{
  font-size: 20px;
  font-weight: 500;
  color: #676767;
}
.luu-san-pham{
  width: 100%;
  height: 60px;
  font-size: 18px;
  line-height: 40px;
  margin-bottom: 15px !important;
  background: #2e6f9e;
  color: white !important;
}
.luu-va-in{
  width: 49.4%;
  height: 60px;
  font-size: 19px;
  line-height: 50px;
  background-color: #001C40;
  color: rgb(255, 212, 59) !important;
}
.divele{
  border-bottom: 1px dashed;
}
.thong-tin-thanh-toan h5{
  text-align: left;
  border-bottom: 1px solid #ddd;
  padding-bottom: 10px;
  padding-top: 10px;
  font-size: 20px;
  color: black;

}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  margin-top: 0px;
  width: 100%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
@media (max-width: 1168px){
  .modal-content{
    width: 80%;
  }
}
/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white !important;
  float: right;
  font-size: 13px;
  font-weight: 500;
  opacity: 1 !important;
  border: 1px solid black;
  border-radius: .375rem;
  text-align: center;
  line-height: 10px;
  width: 28px;
  height: 28px;
  background: black;
  margin-top: 7px;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 5px 16px;
  background-color: white;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 5px 16px;
  background-color: white;
  color: white;
}
</style>
</head>

<body onload="time()" class="app sidebar-mini rtl">
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->
      <li><a class="app-nav__item" href="<?php echo base_url(); ?>index.php/login_register/indexlogin" style="margin-top:3px"><i >Đăng xuất</i> </a>

      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?php echo base_url(); ?>images/logo-lg.png" width="50px"
        alt="User Image">
      <div>
        <p class="app-sidebar__user-name"style="color: blue;"><b>XIN CHÀO</b></p>
        <p class="app-sidebar__user-designation" >Chào mừng bạn trở lại</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">
        

      <li><a class="app-menu__item " href="<?php echo base_url('') ?>index.php/Nhanvien_controller/index_xacnhanve"><i class='app-menu__icon bx bx-cart-alt'></i>
          <span class="app-menu__label">Xác nhận vé</span></a></li>
      
      <li><a class="app-menu__item" href="<?php echo base_url(); ?>index.php/Nhanvien_controller"><i class='app-menu__icon bx bx-id-card'></i>
          <span class="app-menu__label">Quản lý phim</span></a></li>
      
      
      
    </ul>
  </aside>
    <main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active"><a href="#"><b>Xác nhận vé</b></a></li>
        </ul>
        <div id="clock"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row element-button">
                <div class="col-sm-2">
  
                  <a class="btn btn-add btn-sm" href="<?php echo base_url(); ?>index.php/InsertPhim_controller" title="Thêm"><i class="fas fa-plus"></i>
                    Thêm phim mới</a>
                </div>
               
           
              </div>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                  
                    <th >Id Vé</th>
              <th >Id Khách hàng</th>
              <th>Id Lịch Chiếu</th>
              <th>Tổng tiền</th>
              <th >Xác nhận</th>
              <th >Đã lấy vé</th>

                  </tr>
                </thead>
                <tbody>
                   <?php foreach ($dulieubookingtucon as $value): ?>
                <tr>
              <td><?= $value['id_ve']; ?></td>
              <td><?= $value['id_user']; ?></td>
              <td><?= $value['id_calendar']; ?></td>
              <!-- <td><a href="../index.php/Qlylich_controller/indexNgay/<?php echo $value['id'] ?>"><?php echo $value['title'] ?></a></td> -->
               <td><?= $value['tong_tien']; ?></td>
              
              <td><a href="<?php echo base_url(); ?>index.php/Nhanvien_controller/xacnhanve/<?= $value['id_ve']; ?>" class="btn btn-danger sua"><i class="fas fa-edit"></i></a></td>
              <td><?= $value['status']; ?></td>
            </tr>
            <?php endforeach ?>

                               









                    
                   
      
               
              
              
              
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
  <!-- Essential javascripts for application to work-->

 
</body>

</html>






