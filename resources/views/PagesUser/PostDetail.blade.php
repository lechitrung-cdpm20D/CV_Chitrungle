<!DOCTYPE html>
<html lang="vi-VN">

<head>
    <title></title>
    <style>
    /******* Bootstrap Theming ********/
    /*!
 * Bootstrap v4.5.3 (https://getbootstrap.com/)
 * Copyright 2011-2020 The Bootstrap Authors
 * Copyright 2011-2020 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */

    /* Dropdown Button */
    /* Dropdown Button */

    /* Dropdown button on hover & focus */
    input.hidden {

        visibility: hidden;
    }

    .dropbtn:hover,
    .dropbtn:focus {
        background-color: #8a8a8c;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 10px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #ddd;
    }

    /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
    .show {
        display: block;
    }

    /* Darker background on mouse-over */
    .btn:hover {
        background-color: RoyalBlue;
    }

    .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
    }

    /* Display the columns below each other instead of side by side on small screens */
    @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
    }

    /* Add some shadows to create a card effect */
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    /* Some left and right padding inside the container */
    .container {
        padding: 0 16px;
    }

    /* Clear floats */
    .container::after,
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .title {
        color: grey;
    }

    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }

    .button:hover {
        background-color: #555;
    }

    * {
        box-sizing: border-box;
    }

    /* Style the search field */
    form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 80%;
        background: #f1f1f1;
        padding: 5px;
    }

    /* Style the submit button */
    form.example button {
        float: left;
        width: 20%;
        padding: 5px;
        background: #868787;
        color: white;
        font-size: 17px;
        border: 1px solid grey;
        border-left: none;
        /* Prevent double borders */
        cursor: pointer;
    }

    form.example button:hover {
        background: #0b7dda;
    }

    /* Clear floats */
    form.example::after {
        content: "";
        clear: both;
        display: table;
    }

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
        --white: #fff;
        --gray: #6c757d;
        --gray-dark: #343a40;
        --primary: #ED1C24;
        --secondary: #6c757d;
        --success: #28a745;
        --info: #17a2b8;
        --warning: #ffc107;
        --danger: #dc3545;
        --light: #ffffff;
        --dark: #343a40;
        --breakpoint-xs: 0;
        --breakpoint-sm: 576px;
        --breakpoint-md: 768px;
        --breakpoint-lg: 992px;
        --breakpoint-xl: 1200px;
        --font-family-sans-serif: "Roboto", sans-serif;
        --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    article,
    aside,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    nav,
    section {
        display: block;
    }

    body {
        margin: 0;
        font-family: "Roboto", sans-serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #6c757d;
        text-align: left;
        background-color: #f2f2f2;
    }

    [tabindex="-1"]:focus:not(:focus-visible) {
        outline: 0 !important;
    }

    hr {
        box-sizing: content-box;
        height: 0;
        overflow: visible;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
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
        text-decoration: underline dotted;
        cursor: help;
        border-bottom: 0;
        text-decoration-skip-ink: none;
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
        color: #ED1C24;
        text-decoration: none;
        background-color: transparent;
    }

    a:hover {
        color: #af0e14;
        text-decoration: underline;
    }

    a:not([href]):not([class]) {
        color: inherit;
        text-decoration: none;
    }

    a:not([href]):not([class]):hover {
        color: inherit;
        text-decoration: none;
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

    svg {
        overflow: hidden;
        vertical-align: middle;
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
        text-align: -webkit-match-parent;
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
    }

    button,
    input {
        overflow: visible;
    }

    button,
    select {
        text-transform: none;
    }

    [role="button"] {
        cursor: pointer;
    }

    select {
        word-wrap: normal;
    }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
        -webkit-appearance: button;
    }

    button:not(:disabled),
    [type="button"]:not(:disabled),
    [type="reset"]:not(:disabled),
    [type="submit"]:not(:disabled) {
        cursor: pointer;
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
        box-sizing: border-box;
        padding: 0;
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

    @media (max-width: 1200px) {
        legend {
            font-size: calc(1.275rem + 0.3vw);
        }
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

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6 {
        margin-bottom: 0.5rem;
        font-weight: 500;
        line-height: 1.2;
        color: #343a40;
    }

    h1,
    .h1 {
        font-size: 2.5rem;
    }

    @media (max-width: 1200px) {

        h1,
        .h1 {
            font-size: calc(1.375rem + 1.5vw);
        }
    }

    h2,
    .h2 {
        font-size: 2rem;
    }

    @media (max-width: 1200px) {

        h2,
        .h2 {
            font-size: calc(1.325rem + 0.9vw);
        }
    }

    h3,
    .h3 {
        font-size: 1.75rem;
    }

    @media (max-width: 1200px) {

        h3,
        .h3 {
            font-size: calc(1.3rem + 0.6vw);
        }
    }

    h4,
    .h4 {
        font-size: 1.5rem;
    }

    @media (max-width: 1200px) {

        h4,
        .h4 {
            font-size: calc(1.275rem + 0.3vw);
        }
    }

    h5,
    .h5 {
        font-size: 1.25rem;
    }

    h6,
    .h6 {
        font-size: 1rem;
    }

    .lead {
        font-size: 1.25rem;
        font-weight: 300;
    }

    .display-1 {
        font-size: 6rem;
        font-weight: 300;
        line-height: 1.2;
    }

    @media (max-width: 1200px) {
        .display-1 {
            font-size: calc(1.725rem + 5.7vw);
        }
    }

    .display-2 {
        font-size: 5.5rem;
        font-weight: 300;
        line-height: 1.2;
    }

    @media (max-width: 1200px) {
        .display-2 {
            font-size: calc(1.675rem + 5.1vw);
        }
    }

    .display-3 {
        font-size: 4.5rem;
        font-weight: 300;
        line-height: 1.2;
    }

    @media (max-width: 1200px) {
        .display-3 {
            font-size: calc(1.575rem + 3.9vw);
        }
    }

    .display-4 {
        font-size: 3.5rem;
        font-weight: 300;
        line-height: 1.2;
    }

    @media (max-width: 1200px) {
        .display-4 {
            font-size: calc(1.475rem + 2.7vw);
        }
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
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

    .list-unstyled {
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
        font-size: 1.25rem;
    }

    .blockquote-footer {
        display: block;
        font-size: 80%;
        color: #6c757d;
    }

    .blockquote-footer::before {
        content: "\2014\00A0";
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .img-thumbnail {
        padding: 0.25rem;
        background-color: #f2f2f2;
        border: 1px solid #dee2e6;
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
        word-wrap: break-word;
    }

    a>code {
        color: inherit;
    }

    kbd {
        padding: 0.2rem 0.4rem;
        font-size: 87.5%;
        color: #fff;
        background-color: #212529;
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

    .container,
    .container-fluid,
    .container-sm,
    .container-md,
    .container-lg,
    .container-xl {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    @media (min-width: 576px) {

        .container,
        .container-sm {
            max-width: 540px;
        }
    }

    @media (min-width: 768px) {

        .container,
        .container-sm,
        .container-md {
            max-width: 720px;
        }
    }

    @media (min-width: 992px) {

        .container,
        .container-sm,
        .container-md,
        .container-lg {
            max-width: 960px;
        }
    }

    @media (min-width: 1200px) {

        .container,
        .container-sm,
        .container-md,
        .container-lg,
        .container-xl {
            max-width: 1140px;
        }
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .no-gutters {
        margin-right: 0;
        margin-left: 0;
    }

    .no-gutters>.col,
    .no-gutters>[class*="col-"] {
        padding-right: 0;
        padding-left: 0;
    }

    .col-1,
    .col-2,
    .col-3,
    .col-4,
    .col-5,
    .col-6,
    .col-7,
    .col-8,
    .col-9,
    .col-10,
    .col-11,
    .col-12,
    .col,
    .col-auto,
    .col-sm-1,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm,
    .col-sm-auto,
    .col-md-1,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md,
    .col-md-auto,
    .col-lg-1,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg,
    .col-lg-auto,
    .col-xl-1,
    .col-xl-2,
    .col-xl-3,
    .col-xl-4,
    .col-xl-5,
    .col-xl-6,
    .col-xl-7,
    .col-xl-8,
    .col-xl-9,
    .col-xl-10,
    .col-xl-11,
    .col-xl-12,
    .col-xl,
    .col-xl-auto {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }

    .col {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
    }

    .row-cols-1>* {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .row-cols-2>* {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .row-cols-3>* {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .row-cols-4>* {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .row-cols-5>* {
        flex: 0 0 20%;
        max-width: 20%;
    }

    .row-cols-6>* {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .col-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }

    .col-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }

    .col-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .col-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .col-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }

    .col-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }

    .col-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }

    .col-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }

    .col-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }

    .col-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-first {
        order: -1;
    }

    .order-last {
        order: 13;
    }

    .order-0 {
        order: 0;
    }

    .order-1 {
        order: 1;
    }

    .order-2 {
        order: 2;
    }

    .order-3 {
        order: 3;
    }

    .order-4 {
        order: 4;
    }

    .order-5 {
        order: 5;
    }

    .order-6 {
        order: 6;
    }

    .order-7 {
        order: 7;
    }

    .order-8 {
        order: 8;
    }

    .order-9 {
        order: 9;
    }

    .order-10 {
        order: 10;
    }

    .order-11 {
        order: 11;
    }

    .order-12 {
        order: 12;
    }

    .offset-1 {
        margin-left: 8.33333%;
    }

    .offset-2 {
        margin-left: 16.66667%;
    }

    .offset-3 {
        margin-left: 25%;
    }

    .offset-4 {
        margin-left: 33.33333%;
    }

    .offset-5 {
        margin-left: 41.66667%;
    }

    .offset-6 {
        margin-left: 50%;
    }

    .offset-7 {
        margin-left: 58.33333%;
    }

    .offset-8 {
        margin-left: 66.66667%;
    }

    .offset-9 {
        margin-left: 75%;
    }

    .offset-10 {
        margin-left: 83.33333%;
    }

    .offset-11 {
        margin-left: 91.66667%;
    }

    @media (min-width: 576px) {
        .col-sm {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
        }

        .row-cols-sm-1>* {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .row-cols-sm-2>* {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .row-cols-sm-3>* {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .row-cols-sm-4>* {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .row-cols-sm-5>* {
            flex: 0 0 20%;
            max-width: 20%;
        }

        .row-cols-sm-6>* {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }

        .col-sm-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }

        .col-sm-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%;
        }

        .col-sm-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }

        .col-sm-3 {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-sm-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .col-sm-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%;
        }

        .col-sm-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-sm-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%;
        }

        .col-sm-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%;
        }

        .col-sm-9 {
            flex: 0 0 75%;
            max-width: 75%;
        }

        .col-sm-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%;
        }

        .col-sm-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%;
        }

        .col-sm-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .order-sm-first {
            order: -1;
        }

        .order-sm-last {
            order: 13;
        }

        .order-sm-0 {
            order: 0;
        }

        .order-sm-1 {
            order: 1;
        }

        .order-sm-2 {
            order: 2;
        }

        .order-sm-3 {
            order: 3;
        }

        .order-sm-4 {
            order: 4;
        }

        .order-sm-5 {
            order: 5;
        }

        .order-sm-6 {
            order: 6;
        }

        .order-sm-7 {
            order: 7;
        }

        .order-sm-8 {
            order: 8;
        }

        .order-sm-9 {
            order: 9;
        }

        .order-sm-10 {
            order: 10;
        }

        .order-sm-11 {
            order: 11;
        }

        .order-sm-12 {
            order: 12;
        }

        .offset-sm-0 {
            margin-left: 0;
        }

        .offset-sm-1 {
            margin-left: 8.33333%;
        }

        .offset-sm-2 {
            margin-left: 16.66667%;
        }

        .offset-sm-3 {
            margin-left: 25%;
        }

        .offset-sm-4 {
            margin-left: 33.33333%;
        }

        .offset-sm-5 {
            margin-left: 41.66667%;
        }

        .offset-sm-6 {
            margin-left: 50%;
        }

        .offset-sm-7 {
            margin-left: 58.33333%;
        }

        .offset-sm-8 {
            margin-left: 66.66667%;
        }

        .offset-sm-9 {
            margin-left: 75%;
        }

        .offset-sm-10 {
            margin-left: 83.33333%;
        }

        .offset-sm-11 {
            margin-left: 91.66667%;
        }
    }

    @media (min-width: 768px) {
        .col-md {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
        }

        .row-cols-md-1>* {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .row-cols-md-2>* {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .row-cols-md-3>* {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .row-cols-md-4>* {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .row-cols-md-5>* {
            flex: 0 0 20%;
            max-width: 20%;
        }

        .row-cols-md-6>* {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }

        .col-md-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }

        .col-md-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%;
        }

        .col-md-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }

        .col-md-3 {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-md-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .col-md-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%;
        }

        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-md-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%;
        }

        .col-md-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%;
        }

        .col-md-9 {
            flex: 0 0 75%;
            max-width: 75%;
        }

        .col-md-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%;
        }

        .col-md-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%;
        }

        .col-md-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .order-md-first {
            order: -1;
        }

        .order-md-last {
            order: 13;
        }

        .order-md-0 {
            order: 0;
        }

        .order-md-1 {
            order: 1;
        }

        .order-md-2 {
            order: 2;
        }

        .order-md-3 {
            order: 3;
        }

        .order-md-4 {
            order: 4;
        }

        .order-md-5 {
            order: 5;
        }

        .order-md-6 {
            order: 6;
        }

        .order-md-7 {
            order: 7;
        }

        .order-md-8 {
            order: 8;
        }

        .order-md-9 {
            order: 9;
        }

        .order-md-10 {
            order: 10;
        }

        .order-md-11 {
            order: 11;
        }

        .order-md-12 {
            order: 12;
        }

        .offset-md-0 {
            margin-left: 0;
        }

        .offset-md-1 {
            margin-left: 8.33333%;
        }

        .offset-md-2 {
            margin-left: 16.66667%;
        }

        .offset-md-3 {
            margin-left: 25%;
        }

        .offset-md-4 {
            margin-left: 33.33333%;
        }

        .offset-md-5 {
            margin-left: 41.66667%;
        }

        .offset-md-6 {
            margin-left: 50%;
        }

        .offset-md-7 {
            margin-left: 58.33333%;
        }

        .offset-md-8 {
            margin-left: 66.66667%;
        }

        .offset-md-9 {
            margin-left: 75%;
        }

        .offset-md-10 {
            margin-left: 83.33333%;
        }

        .offset-md-11 {
            margin-left: 91.66667%;
        }
    }

    @media (min-width: 992px) {
        .col-lg {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
        }

        .row-cols-lg-1>* {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .row-cols-lg-2>* {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .row-cols-lg-3>* {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .row-cols-lg-4>* {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .row-cols-lg-5>* {
            flex: 0 0 20%;
            max-width: 20%;
        }

        .row-cols-lg-6>* {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }

        .col-lg-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }

        .col-lg-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%;
        }

        .col-lg-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }

        .col-lg-3 {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-lg-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .col-lg-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%;
        }

        .col-lg-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-lg-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%;
        }

        .col-lg-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%;
        }

        .col-lg-9 {
            flex: 0 0 75%;
            max-width: 75%;
        }

        .col-lg-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%;
        }

        .col-lg-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%;
        }

        .col-lg-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .order-lg-first {
            order: -1;
        }

        .order-lg-last {
            order: 13;
        }

        .order-lg-0 {
            order: 0;
        }

        .order-lg-1 {
            order: 1;
        }

        .order-lg-2 {
            order: 2;
        }

        .order-lg-3 {
            order: 3;
        }

        .order-lg-4 {
            order: 4;
        }

        .order-lg-5 {
            order: 5;
        }

        .order-lg-6 {
            order: 6;
        }

        .order-lg-7 {
            order: 7;
        }

        .order-lg-8 {
            order: 8;
        }

        .order-lg-9 {
            order: 9;
        }

        .order-lg-10 {
            order: 10;
        }

        .order-lg-11 {
            order: 11;
        }

        .order-lg-12 {
            order: 12;
        }

        .offset-lg-0 {
            margin-left: 0;
        }

        .offset-lg-1 {
            margin-left: 8.33333%;
        }

        .offset-lg-2 {
            margin-left: 16.66667%;
        }

        .offset-lg-3 {
            margin-left: 25%;
        }

        .offset-lg-4 {
            margin-left: 33.33333%;
        }

        .offset-lg-5 {
            margin-left: 41.66667%;
        }

        .offset-lg-6 {
            margin-left: 50%;
        }

        .offset-lg-7 {
            margin-left: 58.33333%;
        }

        .offset-lg-8 {
            margin-left: 66.66667%;
        }

        .offset-lg-9 {
            margin-left: 75%;
        }

        .offset-lg-10 {
            margin-left: 83.33333%;
        }

        .offset-lg-11 {
            margin-left: 91.66667%;
        }
    }

    @media (min-width: 1200px) {
        .col-xl {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
        }

        .row-cols-xl-1>* {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .row-cols-xl-2>* {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .row-cols-xl-3>* {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .row-cols-xl-4>* {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .row-cols-xl-5>* {
            flex: 0 0 20%;
            max-width: 20%;
        }

        .row-cols-xl-6>* {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }

        .col-xl-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }

        .col-xl-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%;
        }

        .col-xl-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }

        .col-xl-3 {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-xl-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .col-xl-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%;
        }

        .col-xl-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-xl-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%;
        }

        .col-xl-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%;
        }

        .col-xl-9 {
            flex: 0 0 75%;
            max-width: 75%;
        }

        .col-xl-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%;
        }

        .col-xl-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%;
        }

        .col-xl-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .order-xl-first {
            order: -1;
        }

        .order-xl-last {
            order: 13;
        }

        .order-xl-0 {
            order: 0;
        }

        .order-xl-1 {
            order: 1;
        }

        .order-xl-2 {
            order: 2;
        }

        .order-xl-3 {
            order: 3;
        }

        .order-xl-4 {
            order: 4;
        }

        .order-xl-5 {
            order: 5;
        }

        .order-xl-6 {
            order: 6;
        }

        .order-xl-7 {
            order: 7;
        }

        .order-xl-8 {
            order: 8;
        }

        .order-xl-9 {
            order: 9;
        }

        .order-xl-10 {
            order: 10;
        }

        .order-xl-11 {
            order: 11;
        }

        .order-xl-12 {
            order: 12;
        }

        .offset-xl-0 {
            margin-left: 0;
        }

        .offset-xl-1 {
            margin-left: 8.33333%;
        }

        .offset-xl-2 {
            margin-left: 16.66667%;
        }

        .offset-xl-3 {
            margin-left: 25%;
        }

        .offset-xl-4 {
            margin-left: 33.33333%;
        }

        .offset-xl-5 {
            margin-left: 41.66667%;
        }

        .offset-xl-6 {
            margin-left: 50%;
        }

        .offset-xl-7 {
            margin-left: 58.33333%;
        }

        .offset-xl-8 {
            margin-left: 66.66667%;
        }

        .offset-xl-9 {
            margin-left: 75%;
        }

        .offset-xl-10 {
            margin-left: 83.33333%;
        }

        .offset-xl-11 {
            margin-left: 91.66667%;
        }
    }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #6c757d;
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

    .table tbody+tbody {
        border-top: 2px solid #dee2e6;
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
    .table-borderless tbody+tbody {
        border: 0;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05);
    }

    .table-hover tbody tr:hover {
        color: #6c757d;
        background-color: rgba(0, 0, 0, 0.075);
    }

    .table-primary,
    .table-primary>th,
    .table-primary>td {
        background-color: #fabfc2;
    }

    .table-primary th,
    .table-primary td,
    .table-primary thead th,
    .table-primary tbody+tbody {
        border-color: #f6898d;
    }

    .table-hover .table-primary:hover {
        background-color: #f8a7ab;
    }

    .table-hover .table-primary:hover>td,
    .table-hover .table-primary:hover>th {
        background-color: #f8a7ab;
    }

    .table-secondary,
    .table-secondary>th,
    .table-secondary>td {
        background-color: #d6d8db;
    }

    .table-secondary th,
    .table-secondary td,
    .table-secondary thead th,
    .table-secondary tbody+tbody {
        border-color: #b3b7bb;
    }

    .table-hover .table-secondary:hover {
        background-color: #c8cbcf;
    }

    .table-hover .table-secondary:hover>td,
    .table-hover .table-secondary:hover>th {
        background-color: #c8cbcf;
    }

    .table-success,
    .table-success>th,
    .table-success>td {
        background-color: #c3e6cb;
    }

    .table-success th,
    .table-success td,
    .table-success thead th,
    .table-success tbody+tbody {
        border-color: #8fd19e;
    }

    .table-hover .table-success:hover {
        background-color: #b1dfbb;
    }

    .table-hover .table-success:hover>td,
    .table-hover .table-success:hover>th {
        background-color: #b1dfbb;
    }

    .table-info,
    .table-info>th,
    .table-info>td {
        background-color: #bee5eb;
    }

    .table-info th,
    .table-info td,
    .table-info thead th,
    .table-info tbody+tbody {
        border-color: #86cfda;
    }

    .table-hover .table-info:hover {
        background-color: #abdde5;
    }

    .table-hover .table-info:hover>td,
    .table-hover .table-info:hover>th {
        background-color: #abdde5;
    }

    .table-warning,
    .table-warning>th,
    .table-warning>td {
        background-color: #ffeeba;
    }

    .table-warning th,
    .table-warning td,
    .table-warning thead th,
    .table-warning tbody+tbody {
        border-color: #ffdf7e;
    }

    .table-hover .table-warning:hover {
        background-color: #ffe8a1;
    }

    .table-hover .table-warning:hover>td,
    .table-hover .table-warning:hover>th {
        background-color: #ffe8a1;
    }

    .table-danger,
    .table-danger>th,
    .table-danger>td {
        background-color: #f5c6cb;
    }

    .table-danger th,
    .table-danger td,
    .table-danger thead th,
    .table-danger tbody+tbody {
        border-color: #ed969e;
    }

    .table-hover .table-danger:hover {
        background-color: #f1b0b7;
    }

    .table-hover .table-danger:hover>td,
    .table-hover .table-danger:hover>th {
        background-color: #f1b0b7;
    }

    .table-light,
    .table-light>th,
    .table-light>td {
        background-color: white;
    }

    .table-light th,
    .table-light td,
    .table-light thead th,
    .table-light tbody+tbody {
        border-color: white;
    }

    .table-hover .table-light:hover {
        background-color: #f2f2f2;
    }

    .table-hover .table-light:hover>td,
    .table-hover .table-light:hover>th {
        background-color: #f2f2f2;
    }

    .table-dark,
    .table-dark>th,
    .table-dark>td {
        background-color: #c6c8ca;
    }

    .table-dark th,
    .table-dark td,
    .table-dark thead th,
    .table-dark tbody+tbody {
        border-color: #95999c;
    }

    .table-hover .table-dark:hover {
        background-color: #b9bbbe;
    }

    .table-hover .table-dark:hover>td,
    .table-hover .table-dark:hover>th {
        background-color: #b9bbbe;
    }

    .table-active,
    .table-active>th,
    .table-active>td {
        background-color: rgba(0, 0, 0, 0.075);
    }

    .table-hover .table-active:hover {
        background-color: rgba(0, 0, 0, 0.075);
    }

    .table-hover .table-active:hover>td,
    .table-hover .table-active:hover>th {
        background-color: rgba(0, 0, 0, 0.075);
    }

    .table .thead-dark th {
        color: #fff;
        background-color: #343a40;
        border-color: #454d55;
    }

    .table .thead-light th {
        color: #495057;
        background-color: #e9ecef;
        border-color: #dee2e6;
    }

    .table-dark {
        color: #fff;
        background-color: #343a40;
    }

    .table-dark th,
    .table-dark td,
    .table-dark thead th {
        border-color: #454d55;
    }

    .table-dark.table-bordered {
        border: 0;
    }

    .table-dark.table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(255, 255, 255, 0.05);
    }

    .table-dark.table-hover tbody tr:hover {
        color: #fff;
        background-color: rgba(255, 255, 255, 0.075);
    }

    @media (max-width: 575.98px) {
        .table-responsive-sm {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive-sm>.table-bordered {
            border: 0;
        }
    }

    @media (max-width: 767.98px) {
        .table-responsive-md {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive-md>.table-bordered {
            border: 0;
        }
    }

    @media (max-width: 991.98px) {
        .table-responsive-lg {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive-lg>.table-bordered {
            border: 0;
        }
    }

    @media (max-width: 1199.98px) {
        .table-responsive-xl {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive-xl>.table-bordered {
            border: 0;
        }
    }

    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive>.table-bordered {
        border: 0;
    }

    .form-control {
        display: block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .form-control {
            transition: none;
        }
    }

    .form-control::-ms-expand {
        background-color: transparent;
        border: 0;
    }

    .form-control:-moz-focusring {
        color: transparent;
        text-shadow: 0 0 0 #495057;
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #f69296;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(237, 28, 36, 0.25);
    }

    .form-control::placeholder {
        color: #6c757d;
        opacity: 1;
    }

    .form-control:disabled,
    .form-control[readonly] {
        background-color: #e9ecef;
        opacity: 1;
    }

    input[type="date"].form-control,
    input[type="time"].form-control,
    input[type="datetime-local"].form-control,
    input[type="month"].form-control {
        appearance: none;
    }

    select.form-control:focus::-ms-value {
        color: #495057;
        background-color: #fff;
    }

    .form-control-file,
    .form-control-range {
        display: block;
        width: 100%;
    }

    .col-form-label {
        padding-top: calc(0.375rem + 1px);
        padding-bottom: calc(0.375rem + 1px);
        margin-bottom: 0;
        font-size: inherit;
        line-height: 1.5;
    }

    .col-form-label-lg {
        padding-top: calc(0.5rem + 1px);
        padding-bottom: calc(0.5rem + 1px);
        font-size: 1.25rem;
        line-height: 1.5;
    }

    .col-form-label-sm {
        padding-top: calc(0.25rem + 1px);
        padding-bottom: calc(0.25rem + 1px);
        font-size: 0.875rem;
        line-height: 1.5;
    }

    .form-control-plaintext {
        display: block;
        width: 100%;
        padding: 0.375rem 0;
        margin-bottom: 0;
        font-size: 1rem;
        line-height: 1.5;
        color: #6c757d;
        background-color: transparent;
        border: solid transparent;
        border-width: 1px 0;
    }

    .form-control-plaintext.form-control-sm,
    .form-control-plaintext.form-control-lg {
        padding-right: 0;
        padding-left: 0;
    }

    .form-control-sm {
        height: calc(1.5em + 0.5rem + 2px);
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
    }

    .form-control-lg {
        height: calc(1.5em + 1rem + 2px);
        padding: 0.5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
    }

    select.form-control[size],
    select.form-control[multiple] {
        height: auto;
    }

    textarea.form-control {
        height: auto;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-text {
        display: block;
        margin-top: 0.25rem;
    }

    .form-row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -5px;
        margin-left: -5px;
    }

    .form-row>.col,
    .form-row>[class*="col-"] {
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

    .form-check-input[disabled]~.form-check-label,
    .form-check-input:disabled~.form-check-label {
        color: #6c757d;
    }

    .form-check-label {
        margin-bottom: 0;
    }

    .form-check-inline {
        display: inline-flex;
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
        left: 0;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: 0.25rem 0.5rem;
        margin-top: .1rem;
        font-size: 0.875rem;
        line-height: 1.5;
        color: #fff;
        background-color: rgba(40, 167, 69, 0.9);
    }

    .was-validated :valid~.valid-feedback,
    .was-validated :valid~.valid-tooltip,
    .is-valid~.valid-feedback,
    .is-valid~.valid-tooltip {
        display: block;
    }

    .was-validated .form-control:valid,
    .form-control.is-valid {
        border-color: #28a745;
        padding-right: calc(1.5em + 0.75rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right calc(0.375em + 0.1875rem) center;
        background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated .form-control:valid:focus,
    .form-control.is-valid:focus {
        border-color: #28a745;
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    }

    .was-validated textarea.form-control:valid,
    textarea.form-control.is-valid {
        padding-right: calc(1.5em + 0.75rem);
        background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
    }

    .was-validated .custom-select:valid,
    .custom-select.is-valid {
        border-color: #28a745;
        padding-right: calc(0.75em + 2.3125rem);
        background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated .custom-select:valid:focus,
    .custom-select.is-valid:focus {
        border-color: #28a745;
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    }

    .was-validated .form-check-input:valid~.form-check-label,
    .form-check-input.is-valid~.form-check-label {
        color: #28a745;
    }

    .was-validated .form-check-input:valid~.valid-feedback,
    .was-validated .form-check-input:valid~.valid-tooltip,
    .form-check-input.is-valid~.valid-feedback,
    .form-check-input.is-valid~.valid-tooltip {
        display: block;
    }

    .was-validated .custom-control-input:valid~.custom-control-label,
    .custom-control-input.is-valid~.custom-control-label {
        color: #28a745;
    }

    .was-validated .custom-control-input:valid~.custom-control-label::before,
    .custom-control-input.is-valid~.custom-control-label::before {
        border-color: #28a745;
    }

    .was-validated .custom-control-input:valid:checked~.custom-control-label::before,
    .custom-control-input.is-valid:checked~.custom-control-label::before {
        border-color: #34ce57;
        background-color: #34ce57;
    }

    .was-validated .custom-control-input:valid:focus~.custom-control-label::before,
    .custom-control-input.is-valid:focus~.custom-control-label::before {
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    }

    .was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before,
    .custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before {
        border-color: #28a745;
    }

    .was-validated .custom-file-input:valid~.custom-file-label,
    .custom-file-input.is-valid~.custom-file-label {
        border-color: #28a745;
    }

    .was-validated .custom-file-input:valid:focus~.custom-file-label,
    .custom-file-input.is-valid:focus~.custom-file-label {
        border-color: #28a745;
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
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
        left: 0;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: 0.25rem 0.5rem;
        margin-top: .1rem;
        font-size: 0.875rem;
        line-height: 1.5;
        color: #fff;
        background-color: rgba(220, 53, 69, 0.9);
    }

    .was-validated :invalid~.invalid-feedback,
    .was-validated :invalid~.invalid-tooltip,
    .is-invalid~.invalid-feedback,
    .is-invalid~.invalid-tooltip {
        display: block;
    }

    .was-validated .form-control:invalid,
    .form-control.is-invalid {
        border-color: #dc3545;
        padding-right: calc(1.5em + 0.75rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right calc(0.375em + 0.1875rem) center;
        background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated .form-control:invalid:focus,
    .form-control.is-invalid:focus {
        border-color: #dc3545;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    .was-validated textarea.form-control:invalid,
    textarea.form-control.is-invalid {
        padding-right: calc(1.5em + 0.75rem);
        background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
    }

    .was-validated .custom-select:invalid,
    .custom-select.is-invalid {
        border-color: #dc3545;
        padding-right: calc(0.75em + 2.3125rem);
        background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated .custom-select:invalid:focus,
    .custom-select.is-invalid:focus {
        border-color: #dc3545;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    .was-validated .form-check-input:invalid~.form-check-label,
    .form-check-input.is-invalid~.form-check-label {
        color: #dc3545;
    }

    .was-validated .form-check-input:invalid~.invalid-feedback,
    .was-validated .form-check-input:invalid~.invalid-tooltip,
    .form-check-input.is-invalid~.invalid-feedback,
    .form-check-input.is-invalid~.invalid-tooltip {
        display: block;
    }

    .was-validated .custom-control-input:invalid~.custom-control-label,
    .custom-control-input.is-invalid~.custom-control-label {
        color: #dc3545;
    }

    .was-validated .custom-control-input:invalid~.custom-control-label::before,
    .custom-control-input.is-invalid~.custom-control-label::before {
        border-color: #dc3545;
    }

    .was-validated .custom-control-input:invalid:checked~.custom-control-label::before,
    .custom-control-input.is-invalid:checked~.custom-control-label::before {
        border-color: #e4606d;
        background-color: #e4606d;
    }

    .was-validated .custom-control-input:invalid:focus~.custom-control-label::before,
    .custom-control-input.is-invalid:focus~.custom-control-label::before {
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    .was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before,
    .custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before {
        border-color: #dc3545;
    }

    .was-validated .custom-file-input:invalid~.custom-file-label,
    .custom-file-input.is-invalid~.custom-file-label {
        border-color: #dc3545;
    }

    .was-validated .custom-file-input:invalid:focus~.custom-file-label,
    .custom-file-input.is-invalid:focus~.custom-file-label {
        border-color: #dc3545;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    .form-inline {
        display: flex;
        flex-flow: row wrap;
        align-items: center;
    }

    .form-inline .form-check {
        width: 100%;
    }

    @media (min-width: 576px) {
        .form-inline label {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0;
        }

        .form-inline .form-group {
            display: flex;
            flex: 0 0 auto;
            flex-flow: row wrap;
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
            display: flex;
            align-items: center;
            justify-content: center;
            width: auto;
            padding-left: 0;
        }

        .form-inline .form-check-input {
            position: relative;
            flex-shrink: 0;
            margin-top: 0;
            margin-right: 0.25rem;
            margin-left: 0;
        }

        .form-inline .custom-control {
            align-items: center;
            justify-content: center;
        }

        .form-inline .custom-control-label {
            margin-bottom: 0;
        }
    }

    .btn {
        display: inline-block;
        font-weight: 400;
        color: #6c757d;
        text-align: center;
        vertical-align: middle;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 150%;
        line-height: 1.5;
        border-radius: 0;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .btn {
            transition: none;
        }
    }

    .btn:hover {
        color: #6c757d;
        text-decoration: none;
    }

    .btn:focus,
    .btn.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(237, 28, 36, 0.25);
    }

    .btn.disabled,
    .btn:disabled {
        opacity: 0.65;
    }

    .btn:not(:disabled):not(.disabled) {
        cursor: pointer;
    }

    a.btn.disabled,
    fieldset:disabled a.btn {
        pointer-events: none;
    }

    .btn-primary {
        color: #fff;
        background-color: #ED1C24;
        border-color: #ED1C24;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #d21118;
        border-color: #c61017;
    }

    .btn-primary:focus,
    .btn-primary.focus {
        color: #fff;
        background-color: #d21118;
        border-color: #c61017;
        box-shadow: 0 0 0 0.2rem rgba(240, 62, 69, 0.5);
    }

    .btn-primary.disabled,
    .btn-primary:disabled {
        color: #fff;
        background-color: #ED1C24;
        border-color: #ED1C24;
    }

    .btn-primary:not(:disabled):not(.disabled):active,
    .btn-primary:not(:disabled):not(.disabled).active,
    .show>.btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #c61017;
        border-color: #ba0f15;
    }

    .btn-primary:not(:disabled):not(.disabled):active:focus,
    .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(240, 62, 69, 0.5);
    }

    .btn-secondary {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-secondary:hover {
        color: #fff;
        background-color: #5a6268;
        border-color: #545b62;
    }

    .btn-secondary:focus,
    .btn-secondary.focus {
        color: #fff;
        background-color: #5a6268;
        border-color: #545b62;
        box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
    }

    .btn-secondary.disabled,
    .btn-secondary:disabled {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-secondary:not(:disabled):not(.disabled):active,
    .btn-secondary:not(:disabled):not(.disabled).active,
    .show>.btn-secondary.dropdown-toggle {
        color: #fff;
        background-color: #545b62;
        border-color: #4e555b;
    }

    .btn-secondary:not(:disabled):not(.disabled):active:focus,
    .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-secondary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
    }

    .btn-success {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-success:hover {
        color: #fff;
        background-color: #218838;
        border-color: #1e7e34;
    }

    .btn-success:focus,
    .btn-success.focus {
        color: #fff;
        background-color: #218838;
        border-color: #1e7e34;
        box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
    }

    .btn-success.disabled,
    .btn-success:disabled {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-success:not(:disabled):not(.disabled):active,
    .btn-success:not(:disabled):not(.disabled).active,
    .show>.btn-success.dropdown-toggle {
        color: #fff;
        background-color: #1e7e34;
        border-color: #1c7430;
    }

    .btn-success:not(:disabled):not(.disabled):active:focus,
    .btn-success:not(:disabled):not(.disabled).active:focus,
    .show>.btn-success.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
    }

    .btn-info {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-info:hover {
        color: #fff;
        background-color: #138496;
        border-color: #117a8b;
    }

    .btn-info:focus,
    .btn-info.focus {
        color: #fff;
        background-color: #138496;
        border-color: #117a8b;
        box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
    }

    .btn-info.disabled,
    .btn-info:disabled {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-info:not(:disabled):not(.disabled):active,
    .btn-info:not(:disabled):not(.disabled).active,
    .show>.btn-info.dropdown-toggle {
        color: #fff;
        background-color: #117a8b;
        border-color: #10707f;
    }

    .btn-info:not(:disabled):not(.disabled):active:focus,
    .btn-info:not(:disabled):not(.disabled).active:focus,
    .show>.btn-info.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
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

    .btn-warning:focus,
    .btn-warning.focus {
        color: #212529;
        background-color: #e0a800;
        border-color: #d39e00;
        box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
    }

    .btn-warning.disabled,
    .btn-warning:disabled {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-warning:not(:disabled):not(.disabled):active,
    .btn-warning:not(:disabled):not(.disabled).active,
    .show>.btn-warning.dropdown-toggle {
        color: #212529;
        background-color: #d39e00;
        border-color: #c69500;
    }

    .btn-warning:not(:disabled):not(.disabled):active:focus,
    .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show>.btn-warning.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
    }

    .btn-danger {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        color: #fff;
        background-color: #c82333;
        border-color: #bd2130;
    }

    .btn-danger:focus,
    .btn-danger.focus {
        color: #fff;
        background-color: #c82333;
        border-color: #bd2130;
        box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
    }

    .btn-danger.disabled,
    .btn-danger:disabled {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:not(:disabled):not(.disabled):active,
    .btn-danger:not(:disabled):not(.disabled).active,
    .show>.btn-danger.dropdown-toggle {
        color: #fff;
        background-color: #bd2130;
        border-color: #b21f2d;
    }

    .btn-danger:not(:disabled):not(.disabled):active:focus,
    .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show>.btn-danger.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
    }

    .btn-light {
        color: #212529;
        background-color: #ffffff;
        border-color: #ffffff;
    }

    .btn-light:hover {
        color: #212529;
        background-color: #ececec;
        border-color: #e6e6e6;
    }

    .btn-light:focus,
    .btn-light.focus {
        color: #212529;
        background-color: #ececec;
        border-color: #e6e6e6;
        box-shadow: 0 0 0 0.2rem rgba(222, 222, 223, 0.5);
    }

    .btn-light.disabled,
    .btn-light:disabled {
        color: #212529;
        background-color: #ffffff;
        border-color: #ffffff;
    }

    .btn-light:not(:disabled):not(.disabled):active,
    .btn-light:not(:disabled):not(.disabled).active,
    .show>.btn-light.dropdown-toggle {
        color: #212529;
        background-color: #e6e6e6;
        border-color: #dfdfdf;
    }

    .btn-light:not(:disabled):not(.disabled):active:focus,
    .btn-light:not(:disabled):not(.disabled).active:focus,
    .show>.btn-light.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(222, 222, 223, 0.5);
    }

    .btn-dark {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40;
    }

    .btn-dark:hover {
        color: #fff;
        background-color: #23272b;
        border-color: #1d2124;
    }

    .btn-dark:focus,
    .btn-dark.focus {
        color: #fff;
        background-color: #23272b;
        border-color: #1d2124;
        box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
    }

    .btn-dark.disabled,
    .btn-dark:disabled {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40;
    }

    .btn-dark:not(:disabled):not(.disabled):active,
    .btn-dark:not(:disabled):not(.disabled).active,
    .show>.btn-dark.dropdown-toggle {
        color: #fff;
        background-color: #1d2124;
        border-color: #171a1d;
    }

    .btn-dark:not(:disabled):not(.disabled):active:focus,
    .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show>.btn-dark.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
    }

    .btn-outline-primary {
        color: #ED1C24;
        border-color: #ED1C24;
    }

    .btn-outline-primary:hover {
        color: #fff;
        background-color: #ED1C24;
        border-color: #ED1C24;
    }

    .btn-outline-primary:focus,
    .btn-outline-primary.focus {
        box-shadow: 0 0 0 0.2rem rgba(237, 28, 36, 0.5);
    }

    .btn-outline-primary.disabled,
    .btn-outline-primary:disabled {
        color: #ED1C24;
        background-color: transparent;
    }

    .btn-outline-primary:not(:disabled):not(.disabled):active,
    .btn-outline-primary:not(:disabled):not(.disabled).active,
    .show>.btn-outline-primary.dropdown-toggle {
        color: #fff;
        background-color: #ED1C24;
        border-color: #ED1C24;
    }

    .btn-outline-primary:not(:disabled):not(.disabled):active:focus,
    .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(237, 28, 36, 0.5);
    }

    .btn-outline-secondary {
        color: #6c757d;
        border-color: #6c757d;
    }

    .btn-outline-secondary:hover {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-outline-secondary:focus,
    .btn-outline-secondary.focus {
        box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
    }

    .btn-outline-secondary.disabled,
    .btn-outline-secondary:disabled {
        color: #6c757d;
        background-color: transparent;
    }

    .btn-outline-secondary:not(:disabled):not(.disabled):active,
    .btn-outline-secondary:not(:disabled):not(.disabled).active,
    .show>.btn-outline-secondary.dropdown-toggle {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
    .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-secondary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
    }

    .btn-outline-success {
        color: #28a745;
        border-color: #28a745;
    }

    .btn-outline-success:hover {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-outline-success:focus,
    .btn-outline-success.focus {
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
    }

    .btn-outline-success.disabled,
    .btn-outline-success:disabled {
        color: #28a745;
        background-color: transparent;
    }

    .btn-outline-success:not(:disabled):not(.disabled):active,
    .btn-outline-success:not(:disabled):not(.disabled).active,
    .show>.btn-outline-success.dropdown-toggle {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-outline-success:not(:disabled):not(.disabled):active:focus,
    .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-success.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
    }

    .btn-outline-info {
        color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-outline-info:hover {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-outline-info:focus,
    .btn-outline-info.focus {
        box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
    }

    .btn-outline-info.disabled,
    .btn-outline-info:disabled {
        color: #17a2b8;
        background-color: transparent;
    }

    .btn-outline-info:not(:disabled):not(.disabled):active,
    .btn-outline-info:not(:disabled):not(.disabled).active,
    .show>.btn-outline-info.dropdown-toggle {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-outline-info:not(:disabled):not(.disabled):active:focus,
    .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-info.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
    }

    .btn-outline-warning {
        color: #ffc107;
        border-color: #ffc107;
    }

    .btn-outline-warning:hover {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-outline-warning:focus,
    .btn-outline-warning.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
    }

    .btn-outline-warning.disabled,
    .btn-outline-warning:disabled {
        color: #ffc107;
        background-color: transparent;
    }

    .btn-outline-warning:not(:disabled):not(.disabled):active,
    .btn-outline-warning:not(:disabled):not(.disabled).active,
    .show>.btn-outline-warning.dropdown-toggle {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-outline-warning:not(:disabled):not(.disabled):active:focus,
    .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-warning.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
    }

    .btn-outline-danger {
        color: #dc3545;
        border-color: #dc3545;
    }

    .btn-outline-danger:hover {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-outline-danger:focus,
    .btn-outline-danger.focus {
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
    }

    .btn-outline-danger.disabled,
    .btn-outline-danger:disabled {
        color: #dc3545;
        background-color: transparent;
    }

    .btn-outline-danger:not(:disabled):not(.disabled):active,
    .btn-outline-danger:not(:disabled):not(.disabled).active,
    .show>.btn-outline-danger.dropdown-toggle {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-outline-danger:not(:disabled):not(.disabled):active:focus,
    .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-danger.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
    }

    .btn-outline-light {
        color: #ffffff;
        border-color: #ffffff;
    }

    .btn-outline-light:hover {
        color: #212529;
        background-color: #ffffff;
        border-color: #ffffff;
    }

    .btn-outline-light:focus,
    .btn-outline-light.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-outline-light.disabled,
    .btn-outline-light:disabled {
        color: #ffffff;
        background-color: transparent;
    }

    .btn-outline-light:not(:disabled):not(.disabled):active,
    .btn-outline-light:not(:disabled):not(.disabled).active,
    .show>.btn-outline-light.dropdown-toggle {
        color: #212529;
        background-color: #ffffff;
        border-color: #ffffff;
    }

    .btn-outline-light:not(:disabled):not(.disabled):active:focus,
    .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-light.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-outline-dark {
        color: #343a40;
        border-color: #343a40;
    }

    .btn-outline-dark:hover {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40;
    }

    .btn-outline-dark:focus,
    .btn-outline-dark.focus {
        box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
    }

    .btn-outline-dark.disabled,
    .btn-outline-dark:disabled {
        color: #343a40;
        background-color: transparent;
    }

    .btn-outline-dark:not(:disabled):not(.disabled):active,
    .btn-outline-dark:not(:disabled):not(.disabled).active,
    .show>.btn-outline-dark.dropdown-toggle {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40;
    }

    .btn-outline-dark:not(:disabled):not(.disabled):active:focus,
    .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-dark.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
    }

    .btn-link {
        font-weight: 400;
        color: #ED1C24;
        text-decoration: none;
    }

    .btn-link:hover {
        color: #af0e14;
        text-decoration: underline;
    }

    .btn-link:focus,
    .btn-link.focus {
        text-decoration: underline;
    }

    .btn-link:disabled,
    .btn-link.disabled {
        color: #6c757d;
        pointer-events: none;
    }

    .btn-lg,
    .btn-group-lg>.btn {
        padding: 0.5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: 0;
    }

    .btn-sm,
    .btn-group-sm>.btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 0;
    }

    .btn-block {
        display: block;
        width: 100%;
    }

    .btn-block+.btn-block {
        margin-top: 0.5rem;
    }

    input[type="submit"].btn-block,
    input[type="reset"].btn-block,
    input[type="button"].btn-block {
        width: 100%;
    }

    .fade {
        transition: opacity 0.15s linear;
    }

    @media (prefers-reduced-motion: reduce) {
        .fade {
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
        transition: height 0.35s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .collapsing {
            transition: none;
        }
    }

    .dropup,
    .dropright,
    .dropdown,
    .dropleft {
        position: relative;
    }

    .dropdown-toggle {
        white-space: nowrap;
    }

    .dropdown-toggle::after {
        display: inline-block;
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
        float: left;
        min-width: 10rem;
        padding: 0.5rem 0;
        margin: 0.125rem 0 0;
        font-size: 1rem;
        color: #6c757d;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.15);
    }

    .dropdown-menu-left {
        right: auto;
        left: 0;
    }

    .dropdown-menu-right {
        right: 0;
        left: auto;
    }

    @media (min-width: 576px) {
        .dropdown-menu-sm-left {
            right: auto;
            left: 0;
        }

        .dropdown-menu-sm-right {
            right: 0;
            left: auto;
        }
    }

    @media (min-width: 768px) {
        .dropdown-menu-md-left {
            right: auto;
            left: 0;
        }

        .dropdown-menu-md-right {
            right: 0;
            left: auto;
        }
    }

    @media (min-width: 992px) {
        .dropdown-menu-lg-left {
            right: auto;
            left: 0;
        }

        .dropdown-menu-lg-right {
            right: 0;
            left: auto;
        }
    }

    @media (min-width: 1200px) {
        .dropdown-menu-xl-left {
            right: auto;
            left: 0;
        }

        .dropdown-menu-xl-right {
            right: 0;
            left: auto;
        }
    }

    .dropup .dropdown-menu {
        top: auto;
        bottom: 100%;
        margin-top: 0;
        margin-bottom: 0.125rem;
    }

    .dropup .dropdown-toggle::after {
        display: inline-block;
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
        margin-left: 0.125rem;
    }

    .dropright .dropdown-toggle::after {
        display: inline-block;
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
        margin-right: 0.125rem;
    }

    .dropleft .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
    }

    .dropleft .dropdown-toggle::after {
        display: none;
    }

    .dropleft .dropdown-toggle::before {
        display: inline-block;
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

    .dropdown-menu[x-placement^="top"],
    .dropdown-menu[x-placement^="right"],
    .dropdown-menu[x-placement^="bottom"],
    .dropdown-menu[x-placement^="left"] {
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
        padding: 0.25rem 1.5rem;
        clear: both;
        font-weight: 400;
        color: #212529;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
    }

    .dropdown-item:hover,
    .dropdown-item:focus {
        color: #16181b;
        text-decoration: none;
        background-color: #f8f9fa;
    }

    .dropdown-item.active,
    .dropdown-item:active {
        color: #fff;
        text-decoration: none;
        background-color: #ED1C24;
    }

    .dropdown-item.disabled,
    .dropdown-item:disabled {
        color: #6c757d;
        pointer-events: none;
        background-color: transparent;
    }

    .dropdown-menu.show {
        display: block;
    }

    .dropdown-header {
        display: block;
        padding: 0.5rem 1.5rem;
        margin-bottom: 0;
        font-size: 0.875rem;
        color: #6c757d;
        white-space: nowrap;
    }

    .dropdown-item-text {
        display: block;
        padding: 0.25rem 1.5rem;
        color: #212529;
    }

    .btn-group,
    .btn-group-vertical {
        position: relative;
        display: inline-flex;
        vertical-align: middle;
    }

    .btn-group>.btn,
    .btn-group-vertical>.btn {
        position: relative;
        flex: 1 1 auto;
    }

    .btn-group>.btn:hover,
    .btn-group-vertical>.btn:hover {
        z-index: 1;
    }

    .btn-group>.btn:focus,
    .btn-group>.btn:active,
    .btn-group>.btn.active,
    .btn-group-vertical>.btn:focus,
    .btn-group-vertical>.btn:active,
    .btn-group-vertical>.btn.active {
        z-index: 1;
    }

    .btn-toolbar {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
    }

    .btn-toolbar .input-group {
        width: auto;
    }

    .btn-group>.btn:not(:first-child),
    .btn-group>.btn-group:not(:first-child) {
        margin-left: -1px;
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

    .btn-sm+.dropdown-toggle-split,
    .btn-group-sm>.btn+.dropdown-toggle-split {
        padding-right: 0.375rem;
        padding-left: 0.375rem;
    }

    .btn-lg+.dropdown-toggle-split,
    .btn-group-lg>.btn+.dropdown-toggle-split {
        padding-right: 0.75rem;
        padding-left: 0.75rem;
    }

    .btn-group-vertical {
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
    }

    .btn-group-vertical>.btn,
    .btn-group-vertical>.btn-group {
        width: 100%;
    }

    .btn-group-vertical>.btn:not(:first-child),
    .btn-group-vertical>.btn-group:not(:first-child) {
        margin-top: -1px;
    }

    .btn-group-toggle>.btn,
    .btn-group-toggle>.btn-group>.btn {
        margin-bottom: 0;
    }

    .btn-group-toggle>.btn input[type="radio"],
    .btn-group-toggle>.btn input[type="checkbox"],
    .btn-group-toggle>.btn-group>.btn input[type="radio"],
    .btn-group-toggle>.btn-group>.btn input[type="checkbox"] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none;
    }

    .input-group {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;
        width: 100%;
    }

    .input-group>.form-control,
    .input-group>.form-control-plaintext,
    .input-group>.custom-select,
    .input-group>.custom-file {
        position: relative;
        flex: 1 1 auto;
        width: 1%;
        min-width: 0;
        margin-bottom: 0;
    }

    .input-group>.form-control+.form-control,
    .input-group>.form-control+.custom-select,
    .input-group>.form-control+.custom-file,
    .input-group>.form-control-plaintext+.form-control,
    .input-group>.form-control-plaintext+.custom-select,
    .input-group>.form-control-plaintext+.custom-file,
    .input-group>.custom-select+.form-control,
    .input-group>.custom-select+.custom-select,
    .input-group>.custom-select+.custom-file,
    .input-group>.custom-file+.form-control,
    .input-group>.custom-file+.custom-select,
    .input-group>.custom-file+.custom-file {
        margin-left: -1px;
    }

    .input-group>.form-control:focus,
    .input-group>.custom-select:focus,
    .input-group>.custom-file .custom-file-input:focus~.custom-file-label {
        z-index: 3;
    }

    .input-group>.custom-file .custom-file-input:focus {
        z-index: 4;
    }

    .input-group>.custom-file {
        display: flex;
        align-items: center;
    }

    .input-group-prepend,
    .input-group-append {
        display: flex;
    }

    .input-group-prepend .btn,
    .input-group-append .btn {
        position: relative;
        z-index: 2;
    }

    .input-group-prepend .btn:focus,
    .input-group-append .btn:focus {
        z-index: 3;
    }

    .input-group-prepend .btn+.btn,
    .input-group-prepend .btn+.input-group-text,
    .input-group-prepend .input-group-text+.input-group-text,
    .input-group-prepend .input-group-text+.btn,
    .input-group-append .btn+.btn,
    .input-group-append .btn+.input-group-text,
    .input-group-append .input-group-text+.input-group-text,
    .input-group-append .input-group-text+.btn {
        margin-left: -1px;
    }

    .input-group-prepend {
        margin-right: -1px;
    }

    .input-group-append {
        margin-left: -1px;
    }

    .input-group-text {
        display: flex;
        align-items: center;
        padding: 0.375rem 0.75rem;
        margin-bottom: 0;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        text-align: center;
        white-space: nowrap;
        background-color: #e9ecef;
        border: 1px solid #ced4da;
    }

    .input-group-text input[type="radio"],
    .input-group-text input[type="checkbox"] {
        margin-top: 0;
    }

    .input-group-lg>.form-control:not(textarea),
    .input-group-lg>.custom-select {
        height: calc(1.5em + 1rem + 2px);
    }

    .input-group-lg>.form-control,
    .input-group-lg>.custom-select,
    .input-group-lg>.input-group-prepend>.input-group-text,
    .input-group-lg>.input-group-append>.input-group-text,
    .input-group-lg>.input-group-prepend>.btn,
    .input-group-lg>.input-group-append>.btn {
        padding: 0.5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
    }

    .input-group-sm>.form-control:not(textarea),
    .input-group-sm>.custom-select {
        height: calc(1.5em + 0.5rem + 2px);
    }

    .input-group-sm>.form-control,
    .input-group-sm>.custom-select,
    .input-group-sm>.input-group-prepend>.input-group-text,
    .input-group-sm>.input-group-append>.input-group-text,
    .input-group-sm>.input-group-prepend>.btn,
    .input-group-sm>.input-group-append>.btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
    }

    .input-group-lg>.custom-select,
    .input-group-sm>.custom-select {
        padding-right: 1.75rem;
    }

    .custom-control {
        position: relative;
        z-index: 1;
        display: block;
        min-height: 1.5rem;
        padding-left: 1.5rem;
        color-adjust: exact;
    }

    .custom-control-inline {
        display: inline-flex;
        margin-right: 1rem;
    }

    .custom-control-input {
        position: absolute;
        left: 0;
        z-index: -1;
        width: 1rem;
        height: 1.25rem;
        opacity: 0;
    }

    .custom-control-input:checked~.custom-control-label::before {
        color: #fff;
        border-color: #ED1C24;
        background-color: #ED1C24;
    }

    .custom-control-input:focus~.custom-control-label::before {
        box-shadow: 0 0 0 0.2rem rgba(237, 28, 36, 0.25);
    }

    .custom-control-input:focus:not(:checked)~.custom-control-label::before {
        border-color: #f69296;
    }

    .custom-control-input:not(:disabled):active~.custom-control-label::before {
        color: #fff;
        background-color: #fac1c4;
        border-color: #fac1c4;
    }

    .custom-control-input[disabled]~.custom-control-label,
    .custom-control-input:disabled~.custom-control-label {
        color: #6c757d;
    }

    .custom-control-input[disabled]~.custom-control-label::before,
    .custom-control-input:disabled~.custom-control-label::before {
        background-color: #e9ecef;
    }

    .custom-control-label {
        position: relative;
        margin-bottom: 0;
        vertical-align: top;
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
        background-color: #fff;
        border: #adb5bd solid 1px;
    }

    .custom-control-label::after {
        position: absolute;
        top: 0.25rem;
        left: -1.5rem;
        display: block;
        width: 1rem;
        height: 1rem;
        content: "";
        background: no-repeat 50% / 50% 50%;
    }

    .custom-checkbox .custom-control-input:checked~.custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e");
    }

    .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before {
        border-color: #ED1C24;
        background-color: #ED1C24;
    }

    .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e");
    }

    .custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before {
        background-color: rgba(237, 28, 36, 0.5);
    }

    .custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before {
        background-color: rgba(237, 28, 36, 0.5);
    }

    .custom-radio .custom-control-label::before {
        border-radius: 50%;
    }

    .custom-radio .custom-control-input:checked~.custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
    }

    .custom-radio .custom-control-input:disabled:checked~.custom-control-label::before {
        background-color: rgba(237, 28, 36, 0.5);
    }

    .custom-switch {
        padding-left: 2.25rem;
    }

    .custom-switch .custom-control-label::before {
        left: -2.25rem;
        width: 1.75rem;
        pointer-events: all;
        border-radius: 0.5rem;
    }

    .custom-switch .custom-control-label::after {
        top: calc(0.25rem + 2px);
        left: calc(-2.25rem + 2px);
        width: calc(1rem - 4px);
        height: calc(1rem - 4px);
        background-color: #adb5bd;
        border-radius: 0.5rem;
        transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .custom-switch .custom-control-label::after {
            transition: none;
        }
    }

    .custom-switch .custom-control-input:checked~.custom-control-label::after {
        background-color: #fff;
        transform: translateX(0.75rem);
    }

    .custom-switch .custom-control-input:disabled:checked~.custom-control-label::before {
        background-color: rgba(237, 28, 36, 0.5);
    }

    .custom-select {
        display: inline-block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 1.75rem 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        vertical-align: middle;
        background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px;
        border: 1px solid #ced4da;
        border-radius: 0;
        appearance: none;
    }

    .custom-select:focus {
        border-color: #f69296;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(237, 28, 36, 0.25);
    }

    .custom-select:focus::-ms-value {
        color: #495057;
        background-color: #fff;
    }

    .custom-select[multiple],
    .custom-select[size]:not([size="1"]) {
        height: auto;
        padding-right: 0.75rem;
        background-image: none;
    }

    .custom-select:disabled {
        color: #6c757d;
        background-color: #e9ecef;
    }

    .custom-select::-ms-expand {
        display: none;
    }

    .custom-select:-moz-focusring {
        color: transparent;
        text-shadow: 0 0 0 #495057;
    }

    .custom-select-sm {
        height: calc(1.5em + 0.5rem + 2px);
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
        padding-left: 0.5rem;
        font-size: 0.875rem;
    }

    .custom-select-lg {
        height: calc(1.5em + 1rem + 2px);
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 1rem;
        font-size: 1.25rem;
    }

    .custom-file {
        position: relative;
        display: inline-block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        margin-bottom: 0;
    }

    .custom-file-input {
        position: relative;
        z-index: 2;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        margin: 0;
        opacity: 0;
    }

    .custom-file-input:focus~.custom-file-label {
        border-color: #f69296;
        box-shadow: 0 0 0 0.2rem rgba(237, 28, 36, 0.25);
    }

    .custom-file-input[disabled]~.custom-file-label,
    .custom-file-input:disabled~.custom-file-label {
        background-color: #e9ecef;
    }

    .custom-file-input:lang(en)~.custom-file-label::after {
        content: "Browse";
    }

    .custom-file-input~.custom-file-label[data-browse]::after {
        content: attr(data-browse);
    }

    .custom-file-label {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        border: 1px solid #ced4da;
    }

    .custom-file-label::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: block;
        height: calc(1.5em + 0.75rem);
        padding: 0.375rem 0.75rem;
        line-height: 1.5;
        color: #495057;
        content: "Browse";
        background-color: #e9ecef;
        border-left: inherit;
    }

    .custom-range {
        width: 100%;
        height: 1.4rem;
        padding: 0;
        background-color: transparent;
        appearance: none;
    }

    .custom-range:focus {
        outline: none;
    }

    .custom-range:focus::-webkit-slider-thumb {
        box-shadow: 0 0 0 1px #f2f2f2, 0 0 0 0.2rem rgba(237, 28, 36, 0.25);
    }

    .custom-range:focus::-moz-range-thumb {
        box-shadow: 0 0 0 1px #f2f2f2, 0 0 0 0.2rem rgba(237, 28, 36, 0.25);
    }

    .custom-range:focus::-ms-thumb {
        box-shadow: 0 0 0 1px #f2f2f2, 0 0 0 0.2rem rgba(237, 28, 36, 0.25);
    }

    .custom-range::-moz-focus-outer {
        border: 0;
    }

    .custom-range::-webkit-slider-thumb {
        width: 1rem;
        height: 1rem;
        margin-top: -0.25rem;
        background-color: #ED1C24;
        border: 0;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        appearance: none;
    }

    @media (prefers-reduced-motion: reduce) {
        .custom-range::-webkit-slider-thumb {
            transition: none;
        }
    }

    .custom-range::-webkit-slider-thumb:active {
        background-color: #fac1c4;
    }

    .custom-range::-webkit-slider-runnable-track {
        width: 100%;
        height: 0.5rem;
        color: transparent;
        cursor: pointer;
        background-color: #dee2e6;
        border-color: transparent;
    }

    .custom-range::-moz-range-thumb {
        width: 1rem;
        height: 1rem;
        background-color: #ED1C24;
        border: 0;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        appearance: none;
    }

    @media (prefers-reduced-motion: reduce) {
        .custom-range::-moz-range-thumb {
            transition: none;
        }
    }

    .custom-range::-moz-range-thumb:active {
        background-color: #fac1c4;
    }

    .custom-range::-moz-range-track {
        width: 100%;
        height: 0.5rem;
        color: transparent;
        cursor: pointer;
        background-color: #dee2e6;
        border-color: transparent;
    }

    .custom-range::-ms-thumb {
        width: 1rem;
        height: 1rem;
        margin-top: 0;
        margin-right: 0.2rem;
        margin-left: 0.2rem;
        background-color: #ED1C24;
        border: 0;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        appearance: none;
    }

    @media (prefers-reduced-motion: reduce) {
        .custom-range::-ms-thumb {
            transition: none;
        }
    }

    .custom-range::-ms-thumb:active {
        background-color: #fac1c4;
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
    }

    .custom-range::-ms-fill-upper {
        margin-right: 15px;
        background-color: #dee2e6;
    }

    .custom-range:disabled::-webkit-slider-thumb {
        background-color: #adb5bd;
    }

    .custom-range:disabled::-webkit-slider-runnable-track {
        cursor: default;
    }

    .custom-range:disabled::-moz-range-thumb {
        background-color: #adb5bd;
    }

    .custom-range:disabled::-moz-range-track {
        cursor: default;
    }

    .custom-range:disabled::-ms-thumb {
        background-color: #adb5bd;
    }

    .custom-control-label::before,
    .custom-file-label,
    .custom-select {
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {

        .custom-control-label::before,
        .custom-file-label,
        .custom-select {
            transition: none;
        }
    }

    .nav {
        display: flex;
        flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
    }

    .nav-link {
        display: block;
        padding: 0.5rem 1rem;
    }

    .nav-link:hover,
    .nav-link:focus {
        text-decoration: none;
    }

    .nav-link.disabled {
        color: #6c757d;
        pointer-events: none;
        cursor: default;
    }

    .nav-tabs {
        border-bottom: 1px solid #dee2e6;
    }

    .nav-tabs .nav-item {
        margin-bottom: -1px;
    }

    .nav-tabs .nav-link {
        border: 1px solid transparent;
    }

    .nav-tabs .nav-link:hover,
    .nav-tabs .nav-link:focus {
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
        background-color: #f2f2f2;
        border-color: #dee2e6 #dee2e6 #f2f2f2;
    }

    .nav-tabs .dropdown-menu {
        margin-top: -1px;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #ED1C24;
    }

    .nav-fill>.nav-link,
    .nav-fill .nav-item {
        flex: 1 1 auto;
        text-align: center;
    }

    .nav-justified>.nav-link,
    .nav-justified .nav-item {
        flex-basis: 0;
        flex-grow: 1;
        text-align: center;
    }

    .tab-content>.tab-pane {
        display: none;
    }

    .tab-content>.active {
        display: block;
    }

    .navbar {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        padding: 0.5rem 1rem;
    }

    .navbar .container,
    .navbar .container-fluid,
    .navbar .container-sm,
    .navbar .container-md,
    .navbar .container-lg,
    .navbar .container-xl {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
    }

    .navbar-brand {
        display: inline-block;
        padding-top: 0.3125rem;
        padding-bottom: 0.3125rem;
        margin-right: 1rem;
        font-size: 1.25rem;
        line-height: inherit;
        white-space: nowrap;
    }

    .navbar-brand:hover,
    .navbar-brand:focus {
        text-decoration: none;
    }

    .navbar-nav {
        display: flex;
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
        flex-basis: 100%;
        flex-grow: 1;
        align-items: center;
    }

    .navbar-toggler {
        padding: 0.25rem 0.75rem;
        font-size: 1.25rem;
        line-height: 1;
        background-color: transparent;
        border: 1px solid transparent;
    }

    .navbar-toggler:hover,
    .navbar-toggler:focus {
        text-decoration: none;
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

        .navbar-expand-sm>.container,
        .navbar-expand-sm>.container-fluid,
        .navbar-expand-sm>.container-sm,
        .navbar-expand-sm>.container-md,
        .navbar-expand-sm>.container-lg,
        .navbar-expand-sm>.container-xl {
            padding-right: 0;
            padding-left: 0;
        }
    }

    @media (min-width: 576px) {
        .navbar-expand-sm {
            flex-flow: row nowrap;
            justify-content: flex-start;
        }

        .navbar-expand-sm .navbar-nav {
            flex-direction: row;
        }

        .navbar-expand-sm .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .navbar-expand-sm .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }

        .navbar-expand-sm>.container,
        .navbar-expand-sm>.container-fluid,
        .navbar-expand-sm>.container-sm,
        .navbar-expand-sm>.container-md,
        .navbar-expand-sm>.container-lg,
        .navbar-expand-sm>.container-xl {
            flex-wrap: nowrap;
        }

        .navbar-expand-sm .navbar-collapse {
            display: flex !important;
            flex-basis: auto;
        }

        .navbar-expand-sm .navbar-toggler {
            display: none;
        }
    }

    @media (max-width: 767.98px) {

        .navbar-expand-md>.container,
        .navbar-expand-md>.container-fluid,
        .navbar-expand-md>.container-sm,
        .navbar-expand-md>.container-md,
        .navbar-expand-md>.container-lg,
        .navbar-expand-md>.container-xl {
            padding-right: 0;
            padding-left: 0;
        }
    }

    @media (min-width: 768px) {
        .navbar-expand-md {
            flex-flow: row nowrap;
            justify-content: flex-start;
        }

        .navbar-expand-md .navbar-nav {
            flex-direction: row;
        }

        .navbar-expand-md .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .navbar-expand-md .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }

        .navbar-expand-md>.container,
        .navbar-expand-md>.container-fluid,
        .navbar-expand-md>.container-sm,
        .navbar-expand-md>.container-md,
        .navbar-expand-md>.container-lg,
        .navbar-expand-md>.container-xl {
            flex-wrap: nowrap;
        }

        .navbar-expand-md .navbar-collapse {
            display: flex !important;
            flex-basis: auto;
        }

        .navbar-expand-md .navbar-toggler {
            display: none;
        }
    }

    @media (max-width: 991.98px) {

        .navbar-expand-lg>.container,
        .navbar-expand-lg>.container-fluid,
        .navbar-expand-lg>.container-sm,
        .navbar-expand-lg>.container-md,
        .navbar-expand-lg>.container-lg,
        .navbar-expand-lg>.container-xl {
            padding-right: 0;
            padding-left: 0;
        }
    }

    @media (min-width: 992px) {
        .navbar-expand-lg {
            flex-flow: row nowrap;
            justify-content: flex-start;
        }

        .navbar-expand-lg .navbar-nav {
            flex-direction: row;
        }

        .navbar-expand-lg .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }

        .navbar-expand-lg>.container,
        .navbar-expand-lg>.container-fluid,
        .navbar-expand-lg>.container-sm,
        .navbar-expand-lg>.container-md,
        .navbar-expand-lg>.container-lg,
        .navbar-expand-lg>.container-xl {
            flex-wrap: nowrap;
        }

        .navbar-expand-lg .navbar-collapse {
            display: flex !important;
            flex-basis: auto;
        }

        .navbar-expand-lg .navbar-toggler {
            display: none;
        }
    }

    @media (max-width: 1199.98px) {

        .navbar-expand-xl>.container,
        .navbar-expand-xl>.container-fluid,
        .navbar-expand-xl>.container-sm,
        .navbar-expand-xl>.container-md,
        .navbar-expand-xl>.container-lg,
        .navbar-expand-xl>.container-xl {
            padding-right: 0;
            padding-left: 0;
        }
    }

    @media (min-width: 1200px) {
        .navbar-expand-xl {
            flex-flow: row nowrap;
            justify-content: flex-start;
        }

        .navbar-expand-xl .navbar-nav {
            flex-direction: row;
        }

        .navbar-expand-xl .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .navbar-expand-xl .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }

        .navbar-expand-xl>.container,
        .navbar-expand-xl>.container-fluid,
        .navbar-expand-xl>.container-sm,
        .navbar-expand-xl>.container-md,
        .navbar-expand-xl>.container-lg,
        .navbar-expand-xl>.container-xl {
            flex-wrap: nowrap;
        }

        .navbar-expand-xl .navbar-collapse {
            display: flex !important;
            flex-basis: auto;
        }

        .navbar-expand-xl .navbar-toggler {
            display: none;
        }
    }

    .navbar-expand {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }

    .navbar-expand>.container,
    .navbar-expand>.container-fluid,
    .navbar-expand>.container-sm,
    .navbar-expand>.container-md,
    .navbar-expand>.container-lg,
    .navbar-expand>.container-xl {
        padding-right: 0;
        padding-left: 0;
    }

    .navbar-expand .navbar-nav {
        flex-direction: row;
    }

    .navbar-expand .navbar-nav .dropdown-menu {
        position: absolute;
    }

    .navbar-expand .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }

    .navbar-expand>.container,
    .navbar-expand>.container-fluid,
    .navbar-expand>.container-sm,
    .navbar-expand>.container-md,
    .navbar-expand>.container-lg,
    .navbar-expand>.container-xl {
        flex-wrap: nowrap;
    }

    .navbar-expand .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }

    .navbar-expand .navbar-toggler {
        display: none;
    }

    .navbar-light .navbar-brand {
        color: rgba(0, 0, 0, 0.9);
    }

    .navbar-light .navbar-brand:hover,
    .navbar-light .navbar-brand:focus {
        color: rgba(0, 0, 0, 0.9);
    }

    .navbar-light .navbar-nav .nav-link {
        color: rgba(0, 0, 0, 0.5);
    }

    .navbar-light .navbar-nav .nav-link:hover,
    .navbar-light .navbar-nav .nav-link:focus {
        color: rgba(0, 0, 0, 0.7);
    }

    .navbar-light .navbar-nav .nav-link.disabled {
        color: rgba(0, 0, 0, 0.3);
    }

    .navbar-light .navbar-nav .show>.nav-link,
    .navbar-light .navbar-nav .active>.nav-link,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .nav-link.active {
        color: rgba(0, 0, 0, 0.9);
    }

    .navbar-light .navbar-toggler {
        color: rgba(0, 0, 0, 0.5);
        border-color: rgba(0, 0, 0, 0.1);
    }

    .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .navbar-light .navbar-text {
        color: rgba(0, 0, 0, 0.5);
    }

    .navbar-light .navbar-text a {
        color: rgba(0, 0, 0, 0.9);
    }

    .navbar-light .navbar-text a:hover,
    .navbar-light .navbar-text a:focus {
        color: rgba(0, 0, 0, 0.9);
    }

    .navbar-dark .navbar-brand {
        color: #fff;
    }

    .navbar-dark .navbar-brand:hover,
    .navbar-dark .navbar-brand:focus {
        color: #fff;
    }

    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, 0.5);
    }

    .navbar-dark .navbar-nav .nav-link:hover,
    .navbar-dark .navbar-nav .nav-link:focus {
        color: rgba(255, 255, 255, 0.75);
    }

    .navbar-dark .navbar-nav .nav-link.disabled {
        color: rgba(255, 255, 255, 0.25);
    }

    .navbar-dark .navbar-nav .show>.nav-link,
    .navbar-dark .navbar-nav .active>.nav-link,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .nav-link.active {
        color: #fff;
    }

    .navbar-dark .navbar-toggler {
        color: rgba(255, 255, 255, 0.5);
        border-color: rgba(255, 255, 255, 0.1);
    }

    .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .navbar-dark .navbar-text {
        color: rgba(255, 255, 255, 0.5);
    }

    .navbar-dark .navbar-text a {
        color: #fff;
    }

    .navbar-dark .navbar-text a:hover,
    .navbar-dark .navbar-text a:focus {
        color: #fff;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.125);
    }

    .card>hr {
        margin-right: 0;
        margin-left: 0;
    }

    .card>.list-group {
        border-top: inherit;
        border-bottom: inherit;
    }

    .card>.list-group:first-child {
        border-top-width: 0;
    }

    .card>.list-group:last-child {
        border-bottom-width: 0;
    }

    .card>.card-header+.list-group,
    .card>.list-group+.card-footer {
        border-top: 0;
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
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

    .card-link+.card-link {
        margin-left: 1.25rem;
    }

    .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, 0.03);
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    }

    .card-footer {
        padding: 0.75rem 1.25rem;
        background-color: rgba(0, 0, 0, 0.03);
        border-top: 1px solid rgba(0, 0, 0, 0.125);
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

    .card-img,
    .card-img-top,
    .card-img-bottom {
        flex-shrink: 0;
        width: 100%;
    }

    .card-deck .card {
        margin-bottom: 15px;
    }

    @media (min-width: 576px) {
        .card-deck {
            display: flex;
            flex-flow: row wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .card-deck .card {
            flex: 1 0 0%;
            margin-right: 15px;
            margin-bottom: 0;
            margin-left: 15px;
        }
    }

    .card-group>.card {
        margin-bottom: 15px;
    }

    @media (min-width: 576px) {
        .card-group {
            display: flex;
            flex-flow: row wrap;
        }

        .card-group>.card {
            flex: 1 0 0%;
            margin-bottom: 0;
        }

        .card-group>.card+.card {
            margin-left: 0;
            border-left: 0;
        }
    }

    .card-columns .card {
        margin-bottom: 0.75rem;
    }

    @media (min-width: 576px) {
        .card-columns {
            column-count: 3;
            column-gap: 1.25rem;
            orphans: 1;
            widows: 1;
        }

        .card-columns .card {
            display: inline-block;
            width: 100%;
        }
    }

    .accordion {
        overflow-anchor: none;
    }

    .accordion>.card {
        overflow: hidden;
    }

    .accordion>.card:not(:last-of-type) {
        border-bottom: 0;
    }

    .accordion>.card>.card-header {
        margin-bottom: -1px;
    }

    .breadcrumb {
        display: flex;
        flex-wrap: wrap;
        padding: 0.75rem 1rem;
        margin-bottom: 1rem;
        list-style: none;
        background-color: #e9ecef;
    }

    .breadcrumb-item {
        display: flex;
    }

    .breadcrumb-item+.breadcrumb-item {
        padding-left: 0.5rem;
    }

    .breadcrumb-item+.breadcrumb-item::before {
        display: inline-block;
        padding-right: 0.5rem;
        color: #6c757d;
        content: "/";
    }

    .breadcrumb-item+.breadcrumb-item:hover::before {
        text-decoration: underline;
    }

    .breadcrumb-item+.breadcrumb-item:hover::before {
        text-decoration: none;
    }

    .breadcrumb-item.active {
        color: #6c757d;
    }

    .pagination {
        display: flex;
        padding-left: 0;
        list-style: none;
    }

    .page-link {
        position: relative;
        display: block;
        padding: 0.5rem 0.75rem;
        margin-left: -1px;
        line-height: 1.25;
        color: #ED1C24;
        background-color: #fff;
        border: 1px solid #dee2e6;
    }

    .page-link:hover {
        z-index: 2;
        color: #af0e14;
        text-decoration: none;
        background-color: #e9ecef;
        border-color: #dee2e6;
    }

    .page-link:focus {
        z-index: 3;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(237, 28, 36, 0.25);
    }

    .page-item:first-child .page-link {
        margin-left: 0;
    }

    .page-item.active .page-link {
        z-index: 3;
        color: #fff;
        background-color: #ED1C24;
        border-color: #ED1C24;
    }

    .page-item.disabled .page-link {
        color: #6c757d;
        pointer-events: none;
        cursor: auto;
        background-color: #fff;
        border-color: #dee2e6;
    }

    .pagination-lg .page-link {
        padding: 0.75rem 1.5rem;
        font-size: 1.25rem;
        line-height: 1.5;
    }

    .pagination-sm .page-link {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
    }

    .badge {
        display: inline-block;
        padding: 0.25em 0.4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .badge {
            transition: none;
        }
    }

    a.badge:hover,
    a.badge:focus {
        text-decoration: none;
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
    }

    .badge-primary {
        color: #fff;
        background-color: #ED1C24;
    }

    a.badge-primary:hover,
    a.badge-primary:focus {
        color: #fff;
        background-color: #c61017;
    }

    a.badge-primary:focus,
    a.badge-primary.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(237, 28, 36, 0.5);
    }

    .badge-secondary {
        color: #fff;
        background-color: #6c757d;
    }

    a.badge-secondary:hover,
    a.badge-secondary:focus {
        color: #fff;
        background-color: #545b62;
    }

    a.badge-secondary:focus,
    a.badge-secondary.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
    }

    .badge-success {
        color: #fff;
        background-color: #28a745;
    }

    a.badge-success:hover,
    a.badge-success:focus {
        color: #fff;
        background-color: #1e7e34;
    }

    a.badge-success:focus,
    a.badge-success.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
    }

    .badge-info {
        color: #fff;
        background-color: #17a2b8;
    }

    a.badge-info:hover,
    a.badge-info:focus {
        color: #fff;
        background-color: #117a8b;
    }

    a.badge-info:focus,
    a.badge-info.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
    }

    .badge-warning {
        color: #212529;
        background-color: #ffc107;
    }

    a.badge-warning:hover,
    a.badge-warning:focus {
        color: #212529;
        background-color: #d39e00;
    }

    a.badge-warning:focus,
    a.badge-warning.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
    }

    .badge-danger {
        color: #fff;
        background-color: #dc3545;
    }

    a.badge-danger:hover,
    a.badge-danger:focus {
        color: #fff;
        background-color: #bd2130;
    }

    a.badge-danger:focus,
    a.badge-danger.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
    }

    .badge-light {
        color: #212529;
        background-color: #ffffff;
    }

    a.badge-light:hover,
    a.badge-light:focus {
        color: #212529;
        background-color: #e6e6e6;
    }

    a.badge-light:focus,
    a.badge-light.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .badge-dark {
        color: #fff;
        background-color: #343a40;
    }

    a.badge-dark:hover,
    a.badge-dark:focus {
        color: #fff;
        background-color: #1d2124;
    }

    a.badge-dark:focus,
    a.badge-dark.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
    }

    .jumbotron {
        padding: 2rem 1rem;
        margin-bottom: 2rem;
        background-color: #e9ecef;
    }

    @media (min-width: 576px) {
        .jumbotron {
            padding: 4rem 2rem;
        }
    }

    .jumbotron-fluid {
        padding-right: 0;
        padding-left: 0;
    }

    .alert {
        position: relative;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
    }

    .alert-heading {
        color: inherit;
    }

    .alert-link {
        font-weight: 700;
    }

    .alert-dismissible {
        padding-right: 4rem;
    }

    .alert-dismissible .close {
        position: absolute;
        top: 0;
        right: 0;
        z-index: 2;
        padding: 0.75rem 1.25rem;
        color: inherit;
    }

    .alert-primary {
        color: #7b0f13;
        background-color: #fbd2d3;
        border-color: #fabfc2;
    }

    .alert-primary hr {
        border-top-color: #f8a7ab;
    }

    .alert-primary .alert-link {
        color: #4e090c;
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
        color: #858585;
        background-color: white;
        border-color: white;
    }

    .alert-light hr {
        border-top-color: #f2f2f2;
    }

    .alert-light .alert-link {
        color: #6c6c6c;
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

    @keyframes progress-bar-stripes {
        from {
            background-position: 1rem 0;
        }

        to {
            background-position: 0 0;
        }
    }

    .progress {
        display: flex;
        height: 1rem;
        overflow: hidden;
        line-height: 0;
        font-size: 0.75rem;
        background-color: #e9ecef;
    }

    .progress-bar {
        display: flex;
        flex-direction: column;
        justify-content: center;
        overflow: hidden;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        background-color: #ED1C24;
        transition: width 0.6s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .progress-bar {
            transition: none;
        }
    }

    .progress-bar-striped {
        background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        background-size: 1rem 1rem;
    }

    .progress-bar-animated {
        animation: progress-bar-stripes 1s linear infinite;
    }

    @media (prefers-reduced-motion: reduce) {
        .progress-bar-animated {
            animation: none;
        }
    }

    .media {
        display: flex;
        align-items: flex-start;
    }

    .media-body {
        flex: 1;
    }

    .list-group {
        display: flex;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
    }

    .list-group-item-action {
        width: 100%;
        color: #495057;
        text-align: inherit;
    }

    .list-group-item-action:hover,
    .list-group-item-action:focus {
        z-index: 1;
        color: #495057;
        text-decoration: none;
        background-color: #f8f9fa;
    }

    .list-group-item-action:active {
        color: #6c757d;
        background-color: #e9ecef;
    }

    .list-group-item {
        position: relative;
        display: block;
        padding: 0.75rem 1.25rem;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, 0.125);
    }

    .list-group-item.disabled,
    .list-group-item:disabled {
        color: #6c757d;
        pointer-events: none;
        background-color: #fff;
    }

    .list-group-item.active {
        z-index: 2;
        color: #fff;
        background-color: #ED1C24;
        border-color: #ED1C24;
    }

    .list-group-item+.list-group-item {
        border-top-width: 0;
    }

    .list-group-item+.list-group-item.active {
        margin-top: -1px;
        border-top-width: 1px;
    }

    .list-group-horizontal {
        flex-direction: row;
    }

    .list-group-horizontal>.list-group-item.active {
        margin-top: 0;
    }

    .list-group-horizontal>.list-group-item+.list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
    }

    .list-group-horizontal>.list-group-item+.list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
    }

    @media (min-width: 576px) {
        .list-group-horizontal-sm {
            flex-direction: row;
        }

        .list-group-horizontal-sm>.list-group-item.active {
            margin-top: 0;
        }

        .list-group-horizontal-sm>.list-group-item+.list-group-item {
            border-top-width: 1px;
            border-left-width: 0;
        }

        .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px;
        }
    }

    @media (min-width: 768px) {
        .list-group-horizontal-md {
            flex-direction: row;
        }

        .list-group-horizontal-md>.list-group-item.active {
            margin-top: 0;
        }

        .list-group-horizontal-md>.list-group-item+.list-group-item {
            border-top-width: 1px;
            border-left-width: 0;
        }

        .list-group-horizontal-md>.list-group-item+.list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px;
        }
    }

    @media (min-width: 992px) {
        .list-group-horizontal-lg {
            flex-direction: row;
        }

        .list-group-horizontal-lg>.list-group-item.active {
            margin-top: 0;
        }

        .list-group-horizontal-lg>.list-group-item+.list-group-item {
            border-top-width: 1px;
            border-left-width: 0;
        }

        .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px;
        }
    }

    @media (min-width: 1200px) {
        .list-group-horizontal-xl {
            flex-direction: row;
        }

        .list-group-horizontal-xl>.list-group-item.active {
            margin-top: 0;
        }

        .list-group-horizontal-xl>.list-group-item+.list-group-item {
            border-top-width: 1px;
            border-left-width: 0;
        }

        .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px;
        }
    }

    .list-group-flush>.list-group-item {
        border-width: 0 0 1px;
    }

    .list-group-flush>.list-group-item:last-child {
        border-bottom-width: 0;
    }

    .list-group-item-primary {
        color: #7b0f13;
        background-color: #fabfc2;
    }

    .list-group-item-primary.list-group-item-action:hover,
    .list-group-item-primary.list-group-item-action:focus {
        color: #7b0f13;
        background-color: #f8a7ab;
    }

    .list-group-item-primary.list-group-item-action.active {
        color: #fff;
        background-color: #7b0f13;
        border-color: #7b0f13;
    }

    .list-group-item-secondary {
        color: #383d41;
        background-color: #d6d8db;
    }

    .list-group-item-secondary.list-group-item-action:hover,
    .list-group-item-secondary.list-group-item-action:focus {
        color: #383d41;
        background-color: #c8cbcf;
    }

    .list-group-item-secondary.list-group-item-action.active {
        color: #fff;
        background-color: #383d41;
        border-color: #383d41;
    }

    .list-group-item-success {
        color: #155724;
        background-color: #c3e6cb;
    }

    .list-group-item-success.list-group-item-action:hover,
    .list-group-item-success.list-group-item-action:focus {
        color: #155724;
        background-color: #b1dfbb;
    }

    .list-group-item-success.list-group-item-action.active {
        color: #fff;
        background-color: #155724;
        border-color: #155724;
    }

    .list-group-item-info {
        color: #0c5460;
        background-color: #bee5eb;
    }

    .list-group-item-info.list-group-item-action:hover,
    .list-group-item-info.list-group-item-action:focus {
        color: #0c5460;
        background-color: #abdde5;
    }

    .list-group-item-info.list-group-item-action.active {
        color: #fff;
        background-color: #0c5460;
        border-color: #0c5460;
    }

    .list-group-item-warning {
        color: #856404;
        background-color: #ffeeba;
    }

    .list-group-item-warning.list-group-item-action:hover,
    .list-group-item-warning.list-group-item-action:focus {
        color: #856404;
        background-color: #ffe8a1;
    }

    .list-group-item-warning.list-group-item-action.active {
        color: #fff;
        background-color: #856404;
        border-color: #856404;
    }

    .list-group-item-danger {
        color: #721c24;
        background-color: #f5c6cb;
    }

    .list-group-item-danger.list-group-item-action:hover,
    .list-group-item-danger.list-group-item-action:focus {
        color: #721c24;
        background-color: #f1b0b7;
    }

    .list-group-item-danger.list-group-item-action.active {
        color: #fff;
        background-color: #721c24;
        border-color: #721c24;
    }

    .list-group-item-light {
        color: #858585;
        background-color: white;
    }

    .list-group-item-light.list-group-item-action:hover,
    .list-group-item-light.list-group-item-action:focus {
        color: #858585;
        background-color: #f2f2f2;
    }

    .list-group-item-light.list-group-item-action.active {
        color: #fff;
        background-color: #858585;
        border-color: #858585;
    }

    .list-group-item-dark {
        color: #1b1e21;
        background-color: #c6c8ca;
    }

    .list-group-item-dark.list-group-item-action:hover,
    .list-group-item-dark.list-group-item-action:focus {
        color: #1b1e21;
        background-color: #b9bbbe;
    }

    .list-group-item-dark.list-group-item-action.active {
        color: #fff;
        background-color: #1b1e21;
        border-color: #1b1e21;
    }

    .close {
        float: right;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .5;
    }

    @media (max-width: 1200px) {
        .close {
            font-size: calc(1.275rem + 0.3vw);
        }
    }

    .close:hover {
        color: #000;
        text-decoration: none;
    }

    .close:not(:disabled):not(.disabled):hover,
    .close:not(:disabled):not(.disabled):focus {
        opacity: .75;
    }

    button.close {
        padding: 0;
        background-color: transparent;
        border: 0;
    }

    a.close.disabled {
        pointer-events: none;
    }

    .toast {
        flex-basis: 350px;
        max-width: 350px;
        font-size: 0.875rem;
        background-color: rgba(255, 255, 255, 0.85);
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.1);
        box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
        opacity: 0;
    }

    .toast:not(:last-child) {
        margin-bottom: 0.75rem;
    }

    .toast.showing {
        opacity: 1;
    }

    .toast.show {
        display: block;
        opacity: 1;
    }

    .toast.hide {
        display: none;
    }

    .toast-header {
        display: flex;
        align-items: center;
        padding: 0.25rem 0.75rem;
        color: #6c757d;
        background-color: rgba(255, 255, 255, 0.85);
        background-clip: padding-box;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .toast-body {
        padding: 0.75rem;
    }

    .modal-open {
        overflow: hidden;
    }

    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto;
    }

    .modal {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1050;
        display: none;
        width: 100%;
        height: 100%;
        overflow: hidden;
        outline: 0;
    }

    .modal-dialog {
        position: relative;
        width: auto;
        margin: 0.5rem;
        pointer-events: none;
    }

    .modal.fade .modal-dialog {
        transition: transform 0.3s ease-out;
        transform: translate(0, -50px);
    }

    @media (prefers-reduced-motion: reduce) {
        .modal.fade .modal-dialog {
            transition: none;
        }
    }

    .modal.show .modal-dialog {
        transform: none;
    }

    .modal.modal-static .modal-dialog {
        transform: scale(1.02);
    }

    .modal-dialog-scrollable {
        display: flex;
        max-height: calc(100% - 1rem);
    }

    .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 1rem);
        overflow: hidden;
    }

    .modal-dialog-scrollable .modal-header,
    .modal-dialog-scrollable .modal-footer {
        flex-shrink: 0;
    }

    .modal-dialog-scrollable .modal-body {
        overflow-y: auto;
    }

    .modal-dialog-centered {
        display: flex;
        align-items: center;
        min-height: calc(100% - 1rem);
    }

    .modal-dialog-centered::before {
        display: block;
        height: calc(100vh - 1rem);
        height: min-content;
        content: "";
    }

    .modal-dialog-centered.modal-dialog-scrollable {
        flex-direction: column;
        justify-content: center;
        height: 100%;
    }

    .modal-dialog-centered.modal-dialog-scrollable .modal-content {
        max-height: none;
    }

    .modal-dialog-centered.modal-dialog-scrollable::before {
        content: none;
    }

    .modal-content {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.2);
        outline: 0;
    }

    .modal-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1040;
        width: 100vw;
        height: 100vh;
        background-color: #000;
    }

    .modal-backdrop.fade {
        opacity: 0;
    }

    .modal-backdrop.show {
        opacity: 0.5;
    }

    .modal-header {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        padding: 1rem 1rem;
        border-bottom: 1px solid #dee2e6;
    }

    .modal-header .close {
        padding: 1rem 1rem;
        margin: -1rem -1rem -1rem auto;
    }

    .modal-title {
        margin-bottom: 0;
        line-height: 1.5;
    }

    .modal-body {
        position: relative;
        flex: 1 1 auto;
        padding: 1rem;
    }

    .modal-footer {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: flex-end;
        padding: 0.75rem;
        border-top: 1px solid #dee2e6;
    }

    .modal-footer>* {
        margin: 0.25rem;
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

        .modal-dialog-scrollable {
            max-height: calc(100% - 3.5rem);
        }

        .modal-dialog-scrollable .modal-content {
            max-height: calc(100vh - 3.5rem);
        }

        .modal-dialog-centered {
            min-height: calc(100% - 3.5rem);
        }

        .modal-dialog-centered::before {
            height: calc(100vh - 3.5rem);
            height: min-content;
        }

        .modal-sm {
            max-width: 300px;
        }
    }

    @media (min-width: 992px) {

        .modal-lg,
        .modal-xl {
            max-width: 800px;
        }
    }

    @media (min-width: 1200px) {
        .modal-xl {
            max-width: 1140px;
        }
    }

    .tooltip {
        position: absolute;
        z-index: 1070;
        display: block;
        margin: 0;
        font-family: "Roboto", sans-serif;
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
        font-size: 0.875rem;
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

    .bs-tooltip-top,
    .bs-tooltip-auto[x-placement^="top"] {
        padding: 0.4rem 0;
    }

    .bs-tooltip-top .arrow,
    .bs-tooltip-auto[x-placement^="top"] .arrow {
        bottom: 0;
    }

    .bs-tooltip-top .arrow::before,
    .bs-tooltip-auto[x-placement^="top"] .arrow::before {
        top: 0;
        border-width: 0.4rem 0.4rem 0;
        border-top-color: #000;
    }

    .bs-tooltip-right,
    .bs-tooltip-auto[x-placement^="right"] {
        padding: 0 0.4rem;
    }

    .bs-tooltip-right .arrow,
    .bs-tooltip-auto[x-placement^="right"] .arrow {
        left: 0;
        width: 0.4rem;
        height: 0.8rem;
    }

    .bs-tooltip-right .arrow::before,
    .bs-tooltip-auto[x-placement^="right"] .arrow::before {
        right: 0;
        border-width: 0.4rem 0.4rem 0.4rem 0;
        border-right-color: #000;
    }

    .bs-tooltip-bottom,
    .bs-tooltip-auto[x-placement^="bottom"] {
        padding: 0.4rem 0;
    }

    .bs-tooltip-bottom .arrow,
    .bs-tooltip-auto[x-placement^="bottom"] .arrow {
        top: 0;
    }

    .bs-tooltip-bottom .arrow::before,
    .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
        bottom: 0;
        border-width: 0 0.4rem 0.4rem;
        border-bottom-color: #000;
    }

    .bs-tooltip-left,
    .bs-tooltip-auto[x-placement^="left"] {
        padding: 0 0.4rem;
    }

    .bs-tooltip-left .arrow,
    .bs-tooltip-auto[x-placement^="left"] .arrow {
        right: 0;
        width: 0.4rem;
        height: 0.8rem;
    }

    .bs-tooltip-left .arrow::before,
    .bs-tooltip-auto[x-placement^="left"] .arrow::before {
        left: 0;
        border-width: 0.4rem 0 0.4rem 0.4rem;
        border-left-color: #000;
    }

    .tooltip-inner {
        max-width: 200px;
        padding: 0.25rem 0.5rem;
        color: #fff;
        text-align: center;
        background-color: #000;
    }

    .popover {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1060;
        display: block;
        max-width: 276px;
        font-family: "Roboto", sans-serif;
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
        font-size: 0.875rem;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.2);
    }

    .popover .arrow {
        position: absolute;
        display: block;
        width: 1rem;
        height: 0.5rem;
        margin: 0 0.3rem;
    }

    .popover .arrow::before,
    .popover .arrow::after {
        position: absolute;
        display: block;
        content: "";
        border-color: transparent;
        border-style: solid;
    }

    .bs-popover-top,
    .bs-popover-auto[x-placement^="top"] {
        margin-bottom: 0.5rem;
    }

    .bs-popover-top>.arrow,
    .bs-popover-auto[x-placement^="top"]>.arrow {
        bottom: calc(-0.5rem - 1px);
    }

    .bs-popover-top>.arrow::before,
    .bs-popover-auto[x-placement^="top"]>.arrow::before {
        bottom: 0;
        border-width: 0.5rem 0.5rem 0;
        border-top-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-top>.arrow::after,
    .bs-popover-auto[x-placement^="top"]>.arrow::after {
        bottom: 1px;
        border-width: 0.5rem 0.5rem 0;
        border-top-color: #fff;
    }

    .bs-popover-right,
    .bs-popover-auto[x-placement^="right"] {
        margin-left: 0.5rem;
    }

    .bs-popover-right>.arrow,
    .bs-popover-auto[x-placement^="right"]>.arrow {
        left: calc(-0.5rem - 1px);
        width: 0.5rem;
        height: 1rem;
        margin: 0.3rem 0;
    }

    .bs-popover-right>.arrow::before,
    .bs-popover-auto[x-placement^="right"]>.arrow::before {
        left: 0;
        border-width: 0.5rem 0.5rem 0.5rem 0;
        border-right-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-right>.arrow::after,
    .bs-popover-auto[x-placement^="right"]>.arrow::after {
        left: 1px;
        border-width: 0.5rem 0.5rem 0.5rem 0;
        border-right-color: #fff;
    }

    .bs-popover-bottom,
    .bs-popover-auto[x-placement^="bottom"] {
        margin-top: 0.5rem;
    }

    .bs-popover-bottom>.arrow,
    .bs-popover-auto[x-placement^="bottom"]>.arrow {
        top: calc(-0.5rem - 1px);
    }

    .bs-popover-bottom>.arrow::before,
    .bs-popover-auto[x-placement^="bottom"]>.arrow::before {
        top: 0;
        border-width: 0 0.5rem 0.5rem 0.5rem;
        border-bottom-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-bottom>.arrow::after,
    .bs-popover-auto[x-placement^="bottom"]>.arrow::after {
        top: 1px;
        border-width: 0 0.5rem 0.5rem 0.5rem;
        border-bottom-color: #fff;
    }

    .bs-popover-bottom .popover-header::before,
    .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
        position: absolute;
        top: 0;
        left: 50%;
        display: block;
        width: 1rem;
        margin-left: -0.5rem;
        content: "";
        border-bottom: 1px solid #f7f7f7;
    }

    .bs-popover-left,
    .bs-popover-auto[x-placement^="left"] {
        margin-right: 0.5rem;
    }

    .bs-popover-left>.arrow,
    .bs-popover-auto[x-placement^="left"]>.arrow {
        right: calc(-0.5rem - 1px);
        width: 0.5rem;
        height: 1rem;
        margin: 0.3rem 0;
    }

    .bs-popover-left>.arrow::before,
    .bs-popover-auto[x-placement^="left"]>.arrow::before {
        right: 0;
        border-width: 0.5rem 0 0.5rem 0.5rem;
        border-left-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-left>.arrow::after,
    .bs-popover-auto[x-placement^="left"]>.arrow::after {
        right: 1px;
        border-width: 0.5rem 0 0.5rem 0.5rem;
        border-left-color: #fff;
    }

    .popover-header {
        padding: 0.5rem 0.75rem;
        margin-bottom: 0;
        font-size: 1rem;
        color: #343a40;
        background-color: #f7f7f7;
        border-bottom: 1px solid #ebebeb;
    }

    .popover-header:empty {
        display: none;
    }

    .popover-body {
        padding: 0.5rem 0.75rem;
        color: #6c757d;
    }

    .carousel {
        position: relative;
    }

    .carousel.pointer-event {
        touch-action: pan-y;
    }

    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .carousel-inner::after {
        display: block;
        clear: both;
        content: "";
    }

    .carousel-item {
        position: relative;
        display: none;
        float: left;
        width: 100%;
        margin-right: -100%;
        backface-visibility: hidden;
        transition: transform 0.6s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .carousel-item {
            transition: none;
        }
    }

    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }

    .carousel-item-next:not(.carousel-item-left),
    .active.carousel-item-right {
        transform: translateX(100%);
    }

    .carousel-item-prev:not(.carousel-item-right),
    .active.carousel-item-left {
        transform: translateX(-100%);
    }

    .carousel-fade .carousel-item {
        opacity: 0;
        transition-property: opacity;
        transform: none;
    }

    .carousel-fade .carousel-item.active,
    .carousel-fade .carousel-item-next.carousel-item-left,
    .carousel-fade .carousel-item-prev.carousel-item-right {
        z-index: 1;
        opacity: 1;
    }

    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
        z-index: 0;
        opacity: 0;
        transition: opacity 0s 0.6s;
    }

    @media (prefers-reduced-motion: reduce) {

        .carousel-fade .active.carousel-item-left,
        .carousel-fade .active.carousel-item-right {
            transition: none;
        }
    }

    .carousel-control-prev,
    .carousel-control-next {
        position: absolute;
        top: 0;
        bottom: 0;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 15%;
        color: #fff;
        text-align: center;
        opacity: 0.5;
        transition: opacity 0.15s ease;
    }

    @media (prefers-reduced-motion: reduce) {

        .carousel-control-prev,
        .carousel-control-next {
            transition: none;
        }
    }

    .carousel-control-prev:hover,
    .carousel-control-prev:focus,
    .carousel-control-next:hover,
    .carousel-control-next:focus {
        color: #fff;
        text-decoration: none;
        outline: 0;
        opacity: 0.9;
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
        background: no-repeat 50% / 100% 100%;
    }

    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e");
    }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e");
    }

    .carousel-indicators {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 15;
        display: flex;
        justify-content: center;
        padding-left: 0;
        margin-right: 15%;
        margin-left: 15%;
        list-style: none;
    }

    .carousel-indicators li {
        box-sizing: content-box;
        flex: 0 1 auto;
        width: 30px;
        height: 3px;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #fff;
        background-clip: padding-box;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        opacity: .5;
        transition: opacity 0.6s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .carousel-indicators li {
            transition: none;
        }
    }

    .carousel-indicators .active {
        opacity: 1;
    }

    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 20px;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: center;
    }

    @keyframes spinner-border {
        to {
            transform: rotate(360deg);
        }
    }

    .spinner-border {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        vertical-align: text-bottom;
        border: 0.25em solid currentColor;
        border-right-color: transparent;
        border-radius: 50%;
        animation: spinner-border .75s linear infinite;
    }

    .spinner-border-sm {
        width: 1rem;
        height: 1rem;
        border-width: 0.2em;
    }

    @keyframes spinner-grow {
        0% {
            transform: scale(0);
        }

        50% {
            opacity: 1;
            transform: none;
        }
    }

    .spinner-grow {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        vertical-align: text-bottom;
        background-color: currentColor;
        border-radius: 50%;
        opacity: 0;
        animation: spinner-grow .75s linear infinite;
    }

    .spinner-grow-sm {
        width: 1rem;
        height: 1rem;
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
        background-color: #ED1C24 !important;
    }

    a.bg-primary:hover,
    a.bg-primary:focus,
    button.bg-primary:hover,
    button.bg-primary:focus {
        background-color: #c61017 !important;
    }

    .bg-secondary {
        background-color: #6c757d !important;
    }

    a.bg-secondary:hover,
    a.bg-secondary:focus,
    button.bg-secondary:hover,
    button.bg-secondary:focus {
        background-color: #545b62 !important;
    }

    .bg-success {
        background-color: #28a745 !important;
    }

    a.bg-success:hover,
    a.bg-success:focus,
    button.bg-success:hover,
    button.bg-success:focus {
        background-color: #1e7e34 !important;
    }

    .bg-info {
        background-color: #17a2b8 !important;
    }

    a.bg-info:hover,
    a.bg-info:focus,
    button.bg-info:hover,
    button.bg-info:focus {
        background-color: #117a8b !important;
    }

    .bg-warning {
        background-color: #ffc107 !important;
    }

    a.bg-warning:hover,
    a.bg-warning:focus,
    button.bg-warning:hover,
    button.bg-warning:focus {
        background-color: #d39e00 !important;
    }

    .bg-danger {
        background-color: #dc3545 !important;
    }

    a.bg-danger:hover,
    a.bg-danger:focus,
    button.bg-danger:hover,
    button.bg-danger:focus {
        background-color: #bd2130 !important;
    }

    .bg-light {
        background-color: #ffffff !important;
    }

    a.bg-light:hover,
    a.bg-light:focus,
    button.bg-light:hover,
    button.bg-light:focus {
        background-color: #e6e6e6 !important;
    }

    .bg-dark {
        background-color: #343a40 !important;
    }

    a.bg-dark:hover,
    a.bg-dark:focus,
    button.bg-dark:hover,
    button.bg-dark:focus {
        background-color: #1d2124 !important;
    }

    .bg-white {
        background-color: #fff !important;
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
        border-color: #ED1C24 !important;
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
        border-color: #ffffff !important;
    }

    .border-dark {
        border-color: #343a40 !important;
    }

    .border-white {
        border-color: #fff !important;
    }

    .rounded-sm {
        border-radius: 0.2rem !important;
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

    .rounded-lg {
        border-radius: 0.3rem !important;
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .rounded-pill {
        border-radius: 50rem !important;
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
        display: flex !important;
    }

    .d-inline-flex {
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
            display: flex !important;
        }

        .d-sm-inline-flex {
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
            display: flex !important;
        }

        .d-md-inline-flex {
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
            display: flex !important;
        }

        .d-lg-inline-flex {
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
            display: flex !important;
        }

        .d-xl-inline-flex {
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
            display: flex !important;
        }

        .d-print-inline-flex {
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
        padding-top: 42.85714%;
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
        flex-direction: row !important;
    }

    .flex-column {
        flex-direction: column !important;
    }

    .flex-row-reverse {
        flex-direction: row-reverse !important;
    }

    .flex-column-reverse {
        flex-direction: column-reverse !important;
    }

    .flex-wrap {
        flex-wrap: wrap !important;
    }

    .flex-nowrap {
        flex-wrap: nowrap !important;
    }

    .flex-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .flex-fill {
        flex: 1 1 auto !important;
    }

    .flex-grow-0 {
        flex-grow: 0 !important;
    }

    .flex-grow-1 {
        flex-grow: 1 !important;
    }

    .flex-shrink-0 {
        flex-shrink: 0 !important;
    }

    .flex-shrink-1 {
        flex-shrink: 1 !important;
    }

    .justify-content-start {
        justify-content: flex-start !important;
    }

    .justify-content-end {
        justify-content: flex-end !important;
    }

    .justify-content-center {
        justify-content: center !important;
    }

    .justify-content-between {
        justify-content: space-between !important;
    }

    .justify-content-around {
        justify-content: space-around !important;
    }

    .align-items-start {
        align-items: flex-start !important;
    }

    .align-items-end {
        align-items: flex-end !important;
    }

    .align-items-center {
        align-items: center !important;
    }

    .align-items-baseline {
        align-items: baseline !important;
    }

    .align-items-stretch {
        align-items: stretch !important;
    }

    .align-content-start {
        align-content: flex-start !important;
    }

    .align-content-end {
        align-content: flex-end !important;
    }

    .align-content-center {
        align-content: center !important;
    }

    .align-content-between {
        align-content: space-between !important;
    }

    .align-content-around {
        align-content: space-around !important;
    }

    .align-content-stretch {
        align-content: stretch !important;
    }

    .align-self-auto {
        align-self: auto !important;
    }

    .align-self-start {
        align-self: flex-start !important;
    }

    .align-self-end {
        align-self: flex-end !important;
    }

    .align-self-center {
        align-self: center !important;
    }

    .align-self-baseline {
        align-self: baseline !important;
    }

    .align-self-stretch {
        align-self: stretch !important;
    }

    @media (min-width: 576px) {
        .flex-sm-row {
            flex-direction: row !important;
        }

        .flex-sm-column {
            flex-direction: column !important;
        }

        .flex-sm-row-reverse {
            flex-direction: row-reverse !important;
        }

        .flex-sm-column-reverse {
            flex-direction: column-reverse !important;
        }

        .flex-sm-wrap {
            flex-wrap: wrap !important;
        }

        .flex-sm-nowrap {
            flex-wrap: nowrap !important;
        }

        .flex-sm-wrap-reverse {
            flex-wrap: wrap-reverse !important;
        }

        .flex-sm-fill {
            flex: 1 1 auto !important;
        }

        .flex-sm-grow-0 {
            flex-grow: 0 !important;
        }

        .flex-sm-grow-1 {
            flex-grow: 1 !important;
        }

        .flex-sm-shrink-0 {
            flex-shrink: 0 !important;
        }

        .flex-sm-shrink-1 {
            flex-shrink: 1 !important;
        }

        .justify-content-sm-start {
            justify-content: flex-start !important;
        }

        .justify-content-sm-end {
            justify-content: flex-end !important;
        }

        .justify-content-sm-center {
            justify-content: center !important;
        }

        .justify-content-sm-between {
            justify-content: space-between !important;
        }

        .justify-content-sm-around {
            justify-content: space-around !important;
        }

        .align-items-sm-start {
            align-items: flex-start !important;
        }

        .align-items-sm-end {
            align-items: flex-end !important;
        }

        .align-items-sm-center {
            align-items: center !important;
        }

        .align-items-sm-baseline {
            align-items: baseline !important;
        }

        .align-items-sm-stretch {
            align-items: stretch !important;
        }

        .align-content-sm-start {
            align-content: flex-start !important;
        }

        .align-content-sm-end {
            align-content: flex-end !important;
        }

        .align-content-sm-center {
            align-content: center !important;
        }

        .align-content-sm-between {
            align-content: space-between !important;
        }

        .align-content-sm-around {
            align-content: space-around !important;
        }

        .align-content-sm-stretch {
            align-content: stretch !important;
        }

        .align-self-sm-auto {
            align-self: auto !important;
        }

        .align-self-sm-start {
            align-self: flex-start !important;
        }

        .align-self-sm-end {
            align-self: flex-end !important;
        }

        .align-self-sm-center {
            align-self: center !important;
        }

        .align-self-sm-baseline {
            align-self: baseline !important;
        }

        .align-self-sm-stretch {
            align-self: stretch !important;
        }
    }

    @media (min-width: 768px) {
        .flex-md-row {
            flex-direction: row !important;
        }

        .flex-md-column {
            flex-direction: column !important;
        }

        .flex-md-row-reverse {
            flex-direction: row-reverse !important;
        }

        .flex-md-column-reverse {
            flex-direction: column-reverse !important;
        }

        .flex-md-wrap {
            flex-wrap: wrap !important;
        }

        .flex-md-nowrap {
            flex-wrap: nowrap !important;
        }

        .flex-md-wrap-reverse {
            flex-wrap: wrap-reverse !important;
        }

        .flex-md-fill {
            flex: 1 1 auto !important;
        }

        .flex-md-grow-0 {
            flex-grow: 0 !important;
        }

        .flex-md-grow-1 {
            flex-grow: 1 !important;
        }

        .flex-md-shrink-0 {
            flex-shrink: 0 !important;
        }

        .flex-md-shrink-1 {
            flex-shrink: 1 !important;
        }

        .justify-content-md-start {
            justify-content: flex-start !important;
        }

        .justify-content-md-end {
            justify-content: flex-end !important;
        }

        .justify-content-md-center {
            justify-content: center !important;
        }

        .justify-content-md-between {
            justify-content: space-between !important;
        }

        .justify-content-md-around {
            justify-content: space-around !important;
        }

        .align-items-md-start {
            align-items: flex-start !important;
        }

        .align-items-md-end {
            align-items: flex-end !important;
        }

        .align-items-md-center {
            align-items: center !important;
        }

        .align-items-md-baseline {
            align-items: baseline !important;
        }

        .align-items-md-stretch {
            align-items: stretch !important;
        }

        .align-content-md-start {
            align-content: flex-start !important;
        }

        .align-content-md-end {
            align-content: flex-end !important;
        }

        .align-content-md-center {
            align-content: center !important;
        }

        .align-content-md-between {
            align-content: space-between !important;
        }

        .align-content-md-around {
            align-content: space-around !important;
        }

        .align-content-md-stretch {
            align-content: stretch !important;
        }

        .align-self-md-auto {
            align-self: auto !important;
        }

        .align-self-md-start {
            align-self: flex-start !important;
        }

        .align-self-md-end {
            align-self: flex-end !important;
        }

        .align-self-md-center {
            align-self: center !important;
        }

        .align-self-md-baseline {
            align-self: baseline !important;
        }

        .align-self-md-stretch {
            align-self: stretch !important;
        }
    }

    @media (min-width: 992px) {
        .flex-lg-row {
            flex-direction: row !important;
        }

        .flex-lg-column {
            flex-direction: column !important;
        }

        .flex-lg-row-reverse {
            flex-direction: row-reverse !important;
        }

        .flex-lg-column-reverse {
            flex-direction: column-reverse !important;
        }

        .flex-lg-wrap {
            flex-wrap: wrap !important;
        }

        .flex-lg-nowrap {
            flex-wrap: nowrap !important;
        }

        .flex-lg-wrap-reverse {
            flex-wrap: wrap-reverse !important;
        }

        .flex-lg-fill {
            flex: 1 1 auto !important;
        }

        .flex-lg-grow-0 {
            flex-grow: 0 !important;
        }

        .flex-lg-grow-1 {
            flex-grow: 1 !important;
        }

        .flex-lg-shrink-0 {
            flex-shrink: 0 !important;
        }

        .flex-lg-shrink-1 {
            flex-shrink: 1 !important;
        }

        .justify-content-lg-start {
            justify-content: flex-start !important;
        }

        .justify-content-lg-end {
            justify-content: flex-end !important;
        }

        .justify-content-lg-center {
            justify-content: center !important;
        }

        .justify-content-lg-between {
            justify-content: space-between !important;
        }

        .justify-content-lg-around {
            justify-content: space-around !important;
        }

        .align-items-lg-start {
            align-items: flex-start !important;
        }

        .align-items-lg-end {
            align-items: flex-end !important;
        }

        .align-items-lg-center {
            align-items: center !important;
        }

        .align-items-lg-baseline {
            align-items: baseline !important;
        }

        .align-items-lg-stretch {
            align-items: stretch !important;
        }

        .align-content-lg-start {
            align-content: flex-start !important;
        }

        .align-content-lg-end {
            align-content: flex-end !important;
        }

        .align-content-lg-center {
            align-content: center !important;
        }

        .align-content-lg-between {
            align-content: space-between !important;
        }

        .align-content-lg-around {
            align-content: space-around !important;
        }

        .align-content-lg-stretch {
            align-content: stretch !important;
        }

        .align-self-lg-auto {
            align-self: auto !important;
        }

        .align-self-lg-start {
            align-self: flex-start !important;
        }

        .align-self-lg-end {
            align-self: flex-end !important;
        }

        .align-self-lg-center {
            align-self: center !important;
        }

        .align-self-lg-baseline {
            align-self: baseline !important;
        }

        .align-self-lg-stretch {
            align-self: stretch !important;
        }
    }

    @media (min-width: 1200px) {
        .flex-xl-row {
            flex-direction: row !important;
        }

        .flex-xl-column {
            flex-direction: column !important;
        }

        .flex-xl-row-reverse {
            flex-direction: row-reverse !important;
        }

        .flex-xl-column-reverse {
            flex-direction: column-reverse !important;
        }

        .flex-xl-wrap {
            flex-wrap: wrap !important;
        }

        .flex-xl-nowrap {
            flex-wrap: nowrap !important;
        }

        .flex-xl-wrap-reverse {
            flex-wrap: wrap-reverse !important;
        }

        .flex-xl-fill {
            flex: 1 1 auto !important;
        }

        .flex-xl-grow-0 {
            flex-grow: 0 !important;
        }

        .flex-xl-grow-1 {
            flex-grow: 1 !important;
        }

        .flex-xl-shrink-0 {
            flex-shrink: 0 !important;
        }

        .flex-xl-shrink-1 {
            flex-shrink: 1 !important;
        }

        .justify-content-xl-start {
            justify-content: flex-start !important;
        }

        .justify-content-xl-end {
            justify-content: flex-end !important;
        }

        .justify-content-xl-center {
            justify-content: center !important;
        }

        .justify-content-xl-between {
            justify-content: space-between !important;
        }

        .justify-content-xl-around {
            justify-content: space-around !important;
        }

        .align-items-xl-start {
            align-items: flex-start !important;
        }

        .align-items-xl-end {
            align-items: flex-end !important;
        }

        .align-items-xl-center {
            align-items: center !important;
        }

        .align-items-xl-baseline {
            align-items: baseline !important;
        }

        .align-items-xl-stretch {
            align-items: stretch !important;
        }

        .align-content-xl-start {
            align-content: flex-start !important;
        }

        .align-content-xl-end {
            align-content: flex-end !important;
        }

        .align-content-xl-center {
            align-content: center !important;
        }

        .align-content-xl-between {
            align-content: space-between !important;
        }

        .align-content-xl-around {
            align-content: space-around !important;
        }

        .align-content-xl-stretch {
            align-content: stretch !important;
        }

        .align-self-xl-auto {
            align-self: auto !important;
        }

        .align-self-xl-start {
            align-self: flex-start !important;
        }

        .align-self-xl-end {
            align-self: flex-end !important;
        }

        .align-self-xl-center {
            align-self: center !important;
        }

        .align-self-xl-baseline {
            align-self: baseline !important;
        }

        .align-self-xl-stretch {
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

    .user-select-all {
        user-select: all !important;
    }

    .user-select-auto {
        user-select: auto !important;
    }

    .user-select-none {
        user-select: none !important;
    }

    .overflow-auto {
        overflow: auto !important;
    }

    .overflow-hidden {
        overflow: hidden !important;
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

    @supports (position: sticky) {
        .sticky-top {
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
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }

    .sr-only-focusable:active,
    .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        overflow: visible;
        clip: auto;
        white-space: normal;
    }

    .shadow-sm {
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
    }

    .shadow {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }

    .shadow-lg {
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
    }

    .shadow-none {
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

    .min-vw-100 {
        min-width: 100vw !important;
    }

    .min-vh-100 {
        min-height: 100vh !important;
    }

    .vw-100 {
        width: 100vw !important;
    }

    .vh-100 {
        height: 100vh !important;
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

    .m-n1 {
        margin: -0.25rem !important;
    }

    .mt-n1,
    .my-n1 {
        margin-top: -0.25rem !important;
    }

    .mr-n1,
    .mx-n1 {
        margin-right: -0.25rem !important;
    }

    .mb-n1,
    .my-n1 {
        margin-bottom: -0.25rem !important;
    }

    .ml-n1,
    .mx-n1 {
        margin-left: -0.25rem !important;
    }

    .m-n2 {
        margin: -0.5rem !important;
    }

    .mt-n2,
    .my-n2 {
        margin-top: -0.5rem !important;
    }

    .mr-n2,
    .mx-n2 {
        margin-right: -0.5rem !important;
    }

    .mb-n2,
    .my-n2 {
        margin-bottom: -0.5rem !important;
    }

    .ml-n2,
    .mx-n2 {
        margin-left: -0.5rem !important;
    }

    .m-n3 {
        margin: -1rem !important;
    }

    .mt-n3,
    .my-n3 {
        margin-top: -1rem !important;
    }

    .mr-n3,
    .mx-n3 {
        margin-right: -1rem !important;
    }

    .mb-n3,
    .my-n3 {
        margin-bottom: -1rem !important;
    }

    .ml-n3,
    .mx-n3 {
        margin-left: -1rem !important;
    }

    .m-n4 {
        margin: -1.5rem !important;
    }

    .mt-n4,
    .my-n4 {
        margin-top: -1.5rem !important;
    }

    .mr-n4,
    .mx-n4 {
        margin-right: -1.5rem !important;
    }

    .mb-n4,
    .my-n4 {
        margin-bottom: -1.5rem !important;
    }

    .ml-n4,
    .mx-n4 {
        margin-left: -1.5rem !important;
    }

    .m-n5 {
        margin: -3rem !important;
    }

    .mt-n5,
    .my-n5 {
        margin-top: -3rem !important;
    }

    .mr-n5,
    .mx-n5 {
        margin-right: -3rem !important;
    }

    .mb-n5,
    .my-n5 {
        margin-bottom: -3rem !important;
    }

    .ml-n5,
    .mx-n5 {
        margin-left: -3rem !important;
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

        .m-sm-n1 {
            margin: -0.25rem !important;
        }

        .mt-sm-n1,
        .my-sm-n1 {
            margin-top: -0.25rem !important;
        }

        .mr-sm-n1,
        .mx-sm-n1 {
            margin-right: -0.25rem !important;
        }

        .mb-sm-n1,
        .my-sm-n1 {
            margin-bottom: -0.25rem !important;
        }

        .ml-sm-n1,
        .mx-sm-n1 {
            margin-left: -0.25rem !important;
        }

        .m-sm-n2 {
            margin: -0.5rem !important;
        }

        .mt-sm-n2,
        .my-sm-n2 {
            margin-top: -0.5rem !important;
        }

        .mr-sm-n2,
        .mx-sm-n2 {
            margin-right: -0.5rem !important;
        }

        .mb-sm-n2,
        .my-sm-n2 {
            margin-bottom: -0.5rem !important;
        }

        .ml-sm-n2,
        .mx-sm-n2 {
            margin-left: -0.5rem !important;
        }

        .m-sm-n3 {
            margin: -1rem !important;
        }

        .mt-sm-n3,
        .my-sm-n3 {
            margin-top: -1rem !important;
        }

        .mr-sm-n3,
        .mx-sm-n3 {
            margin-right: -1rem !important;
        }

        .mb-sm-n3,
        .my-sm-n3 {
            margin-bottom: -1rem !important;
        }

        .ml-sm-n3,
        .mx-sm-n3 {
            margin-left: -1rem !important;
        }

        .m-sm-n4 {
            margin: -1.5rem !important;
        }

        .mt-sm-n4,
        .my-sm-n4 {
            margin-top: -1.5rem !important;
        }

        .mr-sm-n4,
        .mx-sm-n4 {
            margin-right: -1.5rem !important;
        }

        .mb-sm-n4,
        .my-sm-n4 {
            margin-bottom: -1.5rem !important;
        }

        .ml-sm-n4,
        .mx-sm-n4 {
            margin-left: -1.5rem !important;
        }

        .m-sm-n5 {
            margin: -3rem !important;
        }

        .mt-sm-n5,
        .my-sm-n5 {
            margin-top: -3rem !important;
        }

        .mr-sm-n5,
        .mx-sm-n5 {
            margin-right: -3rem !important;
        }

        .mb-sm-n5,
        .my-sm-n5 {
            margin-bottom: -3rem !important;
        }

        .ml-sm-n5,
        .mx-sm-n5 {
            margin-left: -3rem !important;
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

        .m-md-n1 {
            margin: -0.25rem !important;
        }

        .mt-md-n1,
        .my-md-n1 {
            margin-top: -0.25rem !important;
        }

        .mr-md-n1,
        .mx-md-n1 {
            margin-right: -0.25rem !important;
        }

        .mb-md-n1,
        .my-md-n1 {
            margin-bottom: -0.25rem !important;
        }

        .ml-md-n1,
        .mx-md-n1 {
            margin-left: -0.25rem !important;
        }

        .m-md-n2 {
            margin: -0.5rem !important;
        }

        .mt-md-n2,
        .my-md-n2 {
            margin-top: -0.5rem !important;
        }

        .mr-md-n2,
        .mx-md-n2 {
            margin-right: -0.5rem !important;
        }

        .mb-md-n2,
        .my-md-n2 {
            margin-bottom: -0.5rem !important;
        }

        .ml-md-n2,
        .mx-md-n2 {
            margin-left: -0.5rem !important;
        }

        .m-md-n3 {
            margin: -1rem !important;
        }

        .mt-md-n3,
        .my-md-n3 {
            margin-top: -1rem !important;
        }

        .mr-md-n3,
        .mx-md-n3 {
            margin-right: -1rem !important;
        }

        .mb-md-n3,
        .my-md-n3 {
            margin-bottom: -1rem !important;
        }

        .ml-md-n3,
        .mx-md-n3 {
            margin-left: -1rem !important;
        }

        .m-md-n4 {
            margin: -1.5rem !important;
        }

        .mt-md-n4,
        .my-md-n4 {
            margin-top: -1.5rem !important;
        }

        .mr-md-n4,
        .mx-md-n4 {
            margin-right: -1.5rem !important;
        }

        .mb-md-n4,
        .my-md-n4 {
            margin-bottom: -1.5rem !important;
        }

        .ml-md-n4,
        .mx-md-n4 {
            margin-left: -1.5rem !important;
        }

        .m-md-n5 {
            margin: -3rem !important;
        }

        .mt-md-n5,
        .my-md-n5 {
            margin-top: -3rem !important;
        }

        .mr-md-n5,
        .mx-md-n5 {
            margin-right: -3rem !important;
        }

        .mb-md-n5,
        .my-md-n5 {
            margin-bottom: -3rem !important;
        }

        .ml-md-n5,
        .mx-md-n5 {
            margin-left: -3rem !important;
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

        .m-lg-n1 {
            margin: -0.25rem !important;
        }

        .mt-lg-n1,
        .my-lg-n1 {
            margin-top: -0.25rem !important;
        }

        .mr-lg-n1,
        .mx-lg-n1 {
            margin-right: -0.25rem !important;
        }

        .mb-lg-n1,
        .my-lg-n1 {
            margin-bottom: -0.25rem !important;
        }

        .ml-lg-n1,
        .mx-lg-n1 {
            margin-left: -0.25rem !important;
        }

        .m-lg-n2 {
            margin: -0.5rem !important;
        }

        .mt-lg-n2,
        .my-lg-n2 {
            margin-top: -0.5rem !important;
        }

        .mr-lg-n2,
        .mx-lg-n2 {
            margin-right: -0.5rem !important;
        }

        .mb-lg-n2,
        .my-lg-n2 {
            margin-bottom: -0.5rem !important;
        }

        .ml-lg-n2,
        .mx-lg-n2 {
            margin-left: -0.5rem !important;
        }

        .m-lg-n3 {
            margin: -1rem !important;
        }

        .mt-lg-n3,
        .my-lg-n3 {
            margin-top: -1rem !important;
        }

        .mr-lg-n3,
        .mx-lg-n3 {
            margin-right: -1rem !important;
        }

        .mb-lg-n3,
        .my-lg-n3 {
            margin-bottom: -1rem !important;
        }

        .ml-lg-n3,
        .mx-lg-n3 {
            margin-left: -1rem !important;
        }

        .m-lg-n4 {
            margin: -1.5rem !important;
        }

        .mt-lg-n4,
        .my-lg-n4 {
            margin-top: -1.5rem !important;
        }

        .mr-lg-n4,
        .mx-lg-n4 {
            margin-right: -1.5rem !important;
        }

        .mb-lg-n4,
        .my-lg-n4 {
            margin-bottom: -1.5rem !important;
        }

        .ml-lg-n4,
        .mx-lg-n4 {
            margin-left: -1.5rem !important;
        }

        .m-lg-n5 {
            margin: -3rem !important;
        }

        .mt-lg-n5,
        .my-lg-n5 {
            margin-top: -3rem !important;
        }

        .mr-lg-n5,
        .mx-lg-n5 {
            margin-right: -3rem !important;
        }

        .mb-lg-n5,
        .my-lg-n5 {
            margin-bottom: -3rem !important;
        }

        .ml-lg-n5,
        .mx-lg-n5 {
            margin-left: -3rem !important;
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

        .m-xl-n1 {
            margin: -0.25rem !important;
        }

        .mt-xl-n1,
        .my-xl-n1 {
            margin-top: -0.25rem !important;
        }

        .mr-xl-n1,
        .mx-xl-n1 {
            margin-right: -0.25rem !important;
        }

        .mb-xl-n1,
        .my-xl-n1 {
            margin-bottom: -0.25rem !important;
        }

        .ml-xl-n1,
        .mx-xl-n1 {
            margin-left: -0.25rem !important;
        }

        .m-xl-n2 {
            margin: -0.5rem !important;
        }

        .mt-xl-n2,
        .my-xl-n2 {
            margin-top: -0.5rem !important;
        }

        .mr-xl-n2,
        .mx-xl-n2 {
            margin-right: -0.5rem !important;
        }

        .mb-xl-n2,
        .my-xl-n2 {
            margin-bottom: -0.5rem !important;
        }

        .ml-xl-n2,
        .mx-xl-n2 {
            margin-left: -0.5rem !important;
        }

        .m-xl-n3 {
            margin: -1rem !important;
        }

        .mt-xl-n3,
        .my-xl-n3 {
            margin-top: -1rem !important;
        }

        .mr-xl-n3,
        .mx-xl-n3 {
            margin-right: -1rem !important;
        }

        .mb-xl-n3,
        .my-xl-n3 {
            margin-bottom: -1rem !important;
        }

        .ml-xl-n3,
        .mx-xl-n3 {
            margin-left: -1rem !important;
        }

        .m-xl-n4 {
            margin: -1.5rem !important;
        }

        .mt-xl-n4,
        .my-xl-n4 {
            margin-top: -1.5rem !important;
        }

        .mr-xl-n4,
        .mx-xl-n4 {
            margin-right: -1.5rem !important;
        }

        .mb-xl-n4,
        .my-xl-n4 {
            margin-bottom: -1.5rem !important;
        }

        .ml-xl-n4,
        .mx-xl-n4 {
            margin-left: -1.5rem !important;
        }

        .m-xl-n5 {
            margin: -3rem !important;
        }

        .mt-xl-n5,
        .my-xl-n5 {
            margin-top: -3rem !important;
        }

        .mr-xl-n5,
        .mx-xl-n5 {
            margin-right: -3rem !important;
        }

        .mb-xl-n5,
        .my-xl-n5 {
            margin-bottom: -3rem !important;
        }

        .ml-xl-n5,
        .mx-xl-n5 {
            margin-left: -3rem !important;
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

    .stretched-link::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
        pointer-events: auto;
        content: "";
        background-color: rgba(0, 0, 0, 0);
    }

    .text-monospace {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
    }

    .text-justify {
        text-align: justify !important;
    }

    .text-wrap {
        white-space: normal !important;
    }

    .text-nowrap {
        white-space: nowrap !important;
    }

    .text-truncate {
        overflow: hidden;
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

    .font-weight-lighter {
        font-weight: lighter !important;
    }

    .font-weight-normal {
        font-weight: 400 !important;
    }

    .font-weight-bold {
        font-weight: 700 !important;
    }

    .font-weight-bolder {
        font-weight: bolder !important;
    }

    .font-italic {
        font-style: italic !important;
    }

    .text-white {
        color: #fff !important;
    }

    .text-primary {
        color: #ED1C24 !important;
    }

    a.text-primary:hover,
    a.text-primary:focus {
        color: #af0e14 !important;
    }

    .text-secondary {
        color: #6c757d !important;
    }

    a.text-secondary:hover,
    a.text-secondary:focus {
        color: #494f54 !important;
    }

    .text-success {
        color: #28a745 !important;
    }

    a.text-success:hover,
    a.text-success:focus {
        color: #19692c !important;
    }

    .text-info {
        color: #17a2b8 !important;
    }

    a.text-info:hover,
    a.text-info:focus {
        color: #0f6674 !important;
    }

    .text-warning {
        color: #ffc107 !important;
    }

    a.text-warning:hover,
    a.text-warning:focus {
        color: #ba8b00 !important;
    }

    .text-danger {
        color: #dc3545 !important;
    }

    a.text-danger:hover,
    a.text-danger:focus {
        color: #a71d2a !important;
    }

    .text-light {
        color: #ffffff !important;
    }

    a.text-light:hover,
    a.text-light:focus {
        color: #d9d9d9 !important;
    }

    .text-dark {
        color: #343a40 !important;
    }

    a.text-dark:hover,
    a.text-dark:focus {
        color: #121416 !important;
    }

    .text-body {
        color: #6c757d !important;
    }

    .text-muted {
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

    .text-decoration-none {
        text-decoration: none !important;
    }

    .text-break {
        word-break: break-word !important;
        word-wrap: break-word !important;
    }

    .text-reset {
        color: inherit !important;
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
            box-shadow: none !important;
        }

        a:not(.btn) {
            text-decoration: underline;
        }

        abbr[title]::after {
            content: " ("attr(title) ")";
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
            background-color: #fff !important;
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
        .table-dark tbody+tbody {
            border-color: #dee2e6;
        }

        .table .thead-dark th {
            color: inherit;
            border-color: #dee2e6;
        }
    }

    /********** Template CSS ************/
    h1,
    .font-weight-bolder {
        font-weight: 900 !important;
    }

    h2,
    h3,
    .font-weight-bold {
        font-weight: 700 !important;
    }

    h4,
    h5 .font-weight-medium {
        font-weight: 500 !important;
    }

    h6,
    .font-weight-normal {
        font-weight: 400 !important;
    }

    .back-to-top {
        position: fixed;
        display: none;
        right: 30px;
        bottom: 30px;
        z-index: 99;
    }

    .navbar-light .navbar-nav .nav-link {
        padding: 15px;
        color: #6c757d;
        font-weight: 400;
        outline: none;
    }

    .navbar-light .navbar-nav .nav-link:hover,
    .navbar-light .navbar-nav .nav-link.active {
        color: #ffffff;
        background: #ED1C24;
    }

    @media (max-width: 991.98px) {
        .navbar-light .navbar-nav .nav-link {
            padding: 8px 15px;
        }
    }

    .owl-carousel .owl-nav {
        position: absolute;
        width: 100%;
        height: 30px;
        top: calc(50% - 15px);
        left: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 1;
    }

    .owl-carousel .owl-nav .owl-prev,
    .owl-carousel .owl-nav .owl-next {
        position: relative;
        width: 30px;
        height: 30px;
        margin: 0 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #dee2e6;
        background: transparent;
        border: 1px solid #dee2e6;
        font-size: 16px;
        transition: .3s;
    }

    .owl-carousel .owl-nav .owl-prev:hover,
    .owl-carousel .owl-nav .owl-next:hover {
        color: #ffffff;
        background: #ED1C24;
        border-color: #ED1C24;
    }

    .owl-carousel-1 .owl-nav {
        width: auto;
        left: -5px;
        justify-content: flex-start;
    }

    .owl-carousel-1 .owl-nav .owl-prev,
    .owl-carousel-1 .owl-nav .owl-next,
    .owl-carousel-3 .owl-nav .owl-prev,
    .owl-carousel-3 .owl-nav .owl-next {
        margin: 0 7px;
    }

    .owl-carousel-3 .owl-nav {
        width: auto;
        top: -56px;
        right: 15px;
        left: auto;
        justify-content: flex-end;
    }

    .overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        padding: 30px;
        top: 0;
        left: 0;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-end;
        background: rgba(0, 0, 0, 0.3);
        z-index: 1;
    }

    .page-header {
        height: 400px;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(../img/header.jpg);
        background-position: top;
        background-repeat: no-repeat;
        background-size: cover;
    }

    @media (max-width: 991.98px) {
        .page-header {
            height: 300px;
        }
    }

    .testimonial-text::before {
        position: absolute;
        content: "";
        width: 0;
        height: 0;
        bottom: -20px;
        left: 30px;
        border: 10px solid;
        border-color: #ffffff transparent transparent transparent;
        z-index: 2;
    }

    .testimonial-text::after {
        position: absolute;
        content: "";
        width: 0;
        height: 0;
        bottom: -24px;
        left: 28px;
        border: 12px solid;
        border-color: #dee2e6 transparent transparent transparent;
        z-index: 1;
    }

    .team-carousel .owl-dots,
    .testimonial-carousel .owl-dots {
        margin-top: 30px;
        text-align: center;
    }

    .team-carousel .owl-dot,
    .testimonial-carousel .owl-dot {
        display: inline-block;
        margin: 0 5px;
        width: 12px;
        height: 12px;
        border-radius: 10px;
        background: #dddddd;
    }

    .team-carousel .owl-dot.active,
    .testimonial-carousel .owl-dot.active {
        background: #ED1C24;
    }

    .team-item .team-overlay {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        opacity: 0;
        background: rgba(253, 172, 83, 0.7);
        border: 15px solid #ffffff;
        transition: .5s;
    }

    .team-item:hover .team-overlay {
        opacity: 1;
    }

    .contact-form .help-block ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
    }

    html {
        box-sizing: border-box;
        -ms-overflow-style: scrollbar;
    }

    * {
        margin: 0;
        padding: 0;
    }

    *,
    ::after,
    ::before {
        box-sizing: inherit;
    }

    ::after,
    ::before {
        box-sizing: inherit;
    }

    body {
        color: #333;
        font-family: Source Sans Pro, sans-serif;
    }

    body {
        background: #f4f6f9;
    }

    html {
        box-sizing: border-box;
        font-size: 16px;
    }

    .container,
    .container-fluid,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    /* @media all and (min-width:576px) */
    .container,
    .container-sm {
        max-width: 100%;
    }

    /* @media all and (min-width:768px) */
    .container,
    .container-md,
    .container-sm {
        max-width: 100%;
    }

    /* @media all and (min-width:992px) */
    .container,
    .container-lg,
    .container-md,
    .container-sm {
        max-width: 100%;
    }

    /* @media all and (min-width:1200px) */
    .container,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl {
        max-width: 1280px;
    }

    .modal {
        background-color: #fff;
        border-radius: 5px;
        display: none;
        height: auto;
        left: 50%;
        overflow: auto;
        position: fixed;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 50%;
        z-index: 1000;
    }

    .overlay {
        background-color: rgba(0, 0, 0, .5);
        display: none;
        height: 100%;
        left: 0px;
        overflow: auto;
        padding-top: 100px;
        position: fixed;
        top: 0px;
        width: 100%;
        z-index: 600;
    }

    .modal .modal-content {
        margin: auto;
        padding: 15px;
        width: 100%;
    }

    .filter-attribute__head {
        border-bottom: 1px solid #d9d9d9;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    form .control {
        clear: both;
        margin-bottom: 15px;
        margin-top: 10px;
        position: relative;
    }

    .filter-attribute__body form .control {
        margin-bottom: 0px;
    }

    .mt-4,
    .my-4 {
        margin-top: 1.5rem !important;
    }

    .form-action {
        margin: 0;
        text-align: center;
    }

    button {
        cursor: pointer;
    }

    .btn-primary {
        background: #28a745;
        border: 1px solid #28a745;
        border-radius: 3px;
        color: #fff;
        cursor: pointer;
        font-size: 15px;
        font-weight: 400;
        min-height: 36px;
        padding: 0 10px;
        transition: .3s;
    }

    .fa-rotate-90 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .fa,
    .fas,
    .far,
    .fal,
    .fad,
    .fab {
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
    }

    .fal {
        font-family: "Font Awesome 5 Pro";
        font-weight: 300;
    }

    .fa-search::before {
        content: "\f002";
    }

    input[type=datetime],
    input[type=email],
    input[type=number],
    input[type=password],
    input[type=search],
    input[type=tel],
    input[type=text],
    input[type=url] {
        box-shadow: none;
        color: #1a1a1a;
        filter: none;
        font-size: 15px;
        margin-top: 0px;
        outline: none;
        padding: 14px;
    }

    input[type=datetime],
    input[type=email],
    input[type=number],
    input[type=password],
    input[type=search],
    input[type=tel],
    input[type=text],
    input[type=url],
    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        -o-appearance: none;
        appearance: none;
        background: #fff;
        border: 1px solid #d9d9d9;
        border-radius: 3px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        box-sizing: border-box;
        height: 40px;
        letter-spacing: 0px;
        line-height: 20px;
        width: 100%;
    }

    select {
        color: #333;
        font-size: 14px;
        font-style: normal;
        overflow: hidden;
        padding: 0 30px 0 15px;
        position: relative;
        text-overflow: ellipsis;
        text-transform: none;
        white-space: nowrap;
    }

    select~.up-down::before {
        color: #666;
        content: "\f078";
        font-family: Font Awesome 5 Pro;
        font-size: 12px;
        line-height: 1;
        position: absolute;
        right: 15px;
        top: 15px;
    }

    .filter-attribute__body .control-label label {
        font-size: 15px;
        font-weight: 700;
    }

    input[type=radio] {
        float: left;
        height: 20px;
        margin: 0;
        opacity: 0;
        position: relative;
        width: 20px;
        z-index: 2;
    }

    input[type=radio]+.label,
    input[type=radio]+label {
        color: #333;
        cursor: pointer;
        display: block;
        font: 15px/20px Source Sans Pro, sans-serif;
        font-weight: 400;
        left: 0px;
        letter-spacing: 0px;
        padding-left: 30px;
        position: relative;
        width: 100%;
    }

    input[type=radio]+.label::before,
    input[type=radio]+label::before {
        align-items: center;
        background: #fff;
        border: 1px solid #d9d9d9;
        border-radius: 50%;
        color: #fff;
        content: "";
        display: flex;
        height: 20px;
        justify-content: center;
        left: 0px;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 20px;
    }

    input[type=radio]:checked+.label::before,
    input[type=radio]:checked+label::before {
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        background-color: #28a745;
        border-color: #28a745;
        content: "\f111";
        font-family: Font Awesome 5 Pro;
        font-size: 8px;
        font-style: normal;
        font-variant: normal;
        font-weight: 900;
    }

    .filter-attribute__head button {
        background: none;
        border: none;
        color: #dc3545;
        cursor: pointer;
    }

    .modal span.modal-close {
        color: #dc3545;
        float: right;
        font-size: 26px;
        font-weight: 700;
        line-height: 40px;
    }

    .fa-times::before {
        content: "\f00d";
    }

    .fa-sync::before {
        content: "\f021";
    }

    .wrapper {
        margin-top: 70px;
    }

    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .col,
    .col-1,
    .col-10,
    .col-11,
    .col-12,
    .col-2,
    .col-3,
    .col-4,
    .col-5,
    .col-6,
    .col-7,
    .col-8,
    .col-9,
    .col-auto,
    .col-lg,
    .col-lg-1,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-lg-auto,
    .col-md,
    .col-md-1,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-auto,
    .col-sm,
    .col-sm-1,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-auto,
    .col-xl,
    .col-xl-1,
    .col-xl-10,
    .col-xl-11,
    .col-xl-12,
    .col-xl-2,
    .col-xl-3,
    .col-xl-4,
    .col-xl-5,
    .col-xl-6,
    .col-xl-7,
    .col-xl-8,
    .col-xl-9,
    .col-xl-auto {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }

    /* @media all and (min-width:576px) */
    .col-sm-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
    }

    /* @media all and (min-width:576px) */
    .order-sm-2 {
        -ms-flex-order: 2;
        order: 2;
    }

    /* @media all and (min-width:992px) */
    .col-lg-3 {
        /* -ms-flex: 0 0 25%; */
        flex: 0 0 25%;
        max-width: 50%;
    }

    /* @media all and (min-width:992px) */
    .col-lg-6 {
        -ms-flex: 0 0 50%;
        /* flex: 0 0 50%; */
        max-width: 65%;
    }

    .sticky-top {
        position: -webkit-sticky;
        position: sticky;
        top: 70px;
        z-index: 90;
    }

    .home-page h1,
    .sidebar-left,
    .sidebar-right {
        display: none;
    }

    .sidebar-left,
    .sidebar-right {
        display: block;
    }

    p {
        display: block;
        font-size: 1rem;
        margin-bottom: 15px;
    }

    .mt-3,
    .my-3 {
        margin-top: 1rem !important;
    }

    .both-sides-title {
        display: flex;
        justify-content: space-between;
    }

    .block {
        background: #fff;
        box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
        padding: 12px;
    }

    .block,
    .user-information {
        border-radius: 5px;
    }

    .news {
        display: flex;
        flex-wrap: wrap;
        padding: 0 0 10px;
    }

    .news-list-column .news {
        padding-bottom: 12px;
    }

    .news-list-column :last-child.news {
        padding-bottom: 0px;
    }

    .news .news_image {
        border-radius: 3px;
        max-height: 70px;
        overflow: hidden;
        width: 32%;
    }

    .news-list-column .news .news_image {
        border-radius: 5px;
        max-height: 80px;
        width: 40%;
    }

    .news .news_title {
        width: 100%;
    }

    .news-list-column .news .news_title {
        padding-left: 12px;
        width: 60%;
    }

    a {
        color: #333;
        text-decoration: none;
    }

    .news .news_title a {
        color: #333;
        text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 10px 0;
    }

    h1,
    h2,
    h3,
    h4 {
        font-size: 1rem;
        line-height: 1.25rem;
    }

    .news .news_title a h3 {
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        font-size: 0.81rem;
        line-height: 16px;
        margin: 5px 0;
        max-height: 40px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .news-list-column .news .news_title h3 {
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        font-size: 0.93rem;
        line-height: 1.12rem;
        margin-top: 0px;
        max-height: 54px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .text-center {
        text-align: center;
    }

    .text-danger {
        color: #dc3545;
    }

    .news .news_image img {
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        -o-object-position: center;
        object-position: center;
        transition: .2s linear;
        width: 100%;
    }

    .both-sides-title a:not(.btn-danger) {
        margin: 10px 0;
        text-decoration: underline;
    }

    .wrapper .contents {
        margin-bottom: 20vh;
    }

    .loading {
        display: none;
    }

    .loading {
        font-size: 0.93rem;
        margin: 50px auto;
        text-align: center;
    }

    .lds-dual-ring {
        display: inline-block;
        height: 50px;
        width: 50px;
    }

    .lds-dual-ring::after {
        -webkit-animation: lds-dual-ring 1s linear infinite;
        animation: lds-dual-ring 1s linear infinite;
        border-color: #d9d9d9 transparent;
        border-radius: 50%;
        border-style: solid;
        border-width: 4px;
        content: " ";
        display: block;
        height: 50px;
        width: 50px;
    }

    .ads-right .item img,
    .posts {
        width: 100%;
    }

    .posts {
        background: #fff;
        border-bottom: 1px dashed #d9d9d9;
        display: flex;
        flex-wrap: wrap;
        margin: 5px 0 0;
        padding: 0 0 15px;
    }

    .posts {
        border-bottom: none;
        border-radius: 5px;
        box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
        margin-top: 15px;
        padding: 0;
    }

    :first-child.posts {
        border-top: none;
        margin-top: 0px;
    }

    .posts .title-mobile {
        width: 100%;
    }

    .posts .title-mobile {
        display: none;
    }

    .posts .image {
        background-color: #333;
        display: flex;
        justify-content: center;
        max-height: 102px;
        overflow: hidden;
        position: relative;
        width: 45%;
    }

    /* @media screen and (min-width:480px) */
    .posts .image {
        max-height: 120px;
    }

    /* @media screen and (min-width:640px) */
    .posts .image {
        max-height: 130px;
    }

    .posts a.image {
        border-radius: 5px 0 0 5px;
        max-height: 193px;
        width: 35%;
    }

    .posts .info {
        align-self: flex-start;
        display: flex;
        flex-wrap: wrap;
        padding-left: 12px;
        width: 55%;
    }

    .posts .info {
        padding: 25px 15px;
        width: 65%;
    }

    .posts .title-desktop {
        display: none;
        width: 100%;
    }

    .posts .title-desktop {
        display: block;
    }

    .posts .description {
        width: 100%;
    }

    .posts .additional-info {
        color: #333;
        display: flex;
        flex-wrap: wrap;
        font-size: 0.87rem;
    }

    .posts .additional-info {
        display: flex;
        margin-bottom: 5px;
        width: 100%;
    }

    .posts .additional-info .address {
        display: none;
        width: 100%;
    }

    .posts .additional-info .address {
        display: block;
        width: 50%;
    }

    .posts .additional-info .time {
        display: block;
        text-align: right;
        width: 50%;
    }

    .posts .additional-info .cate {
        display: block;
        margin-bottom: 0px;
        width: 50%;
    }

    .fa-clock::before {
        content: "\f017";
    }

    .fa-map-marker-alt::before {
        content: "\f3c5";
    }

    .posts .additional-info i,
    .posts .additional-info i.fal {
        font-size: 13px;
        text-align: center;
        width: 16px;
    }

    .posts .description p {
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        color: #666;
        display: -webkit-box;
        font-size: 0.93rem;
        line-height: 1.12rem;
        margin-bottom: 10px;
        max-height: 54px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .posts .description p {
        margin-bottom: 8px;
    }

    .posts .title-desktop h3 {
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        font-size: 1.12rem;
        line-height: 1.37rem;
        margin: 5px 0 10px;
        max-height: 44px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .posts .image .posts-view {
        background: #ffc107;
        border-radius: 0 8px 0 0;
        bottom: 0px;
        display: block;
        font-size: 0.87rem;
        font-weight: 600;
        left: 0px;
        padding: 2px 6px;
        position: absolute;
        z-index: 50;
    }

    .posts .image img {
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        -o-object-position: center;
        object-position: center;
        width: 100%;
    }

    .posts a.image img {
        transition: .2s linear;
    }

    .fa-eye::before {
        content: "\f06e";
    }

    .posts .title-mobile h3 {
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        font-size: 1.25rem;
        line-height: 1.5rem;
        max-height: 48px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .both-sides-title h4 {
        margin-bottom: 5px;
    }

    .btn-show-filter-modal {
        display: block;
    }

    .btn-show-filter-modal {
        display: none;
    }

    .fa-filter::before {
        content: "\f0b0";
    }

    .filter-attribute__head h4 {
        font-size: 1rem;
    }

    .header {
        left: 0px;
        position: fixed;
        right: 0px;
        top: 0px;
        z-index: 100;
    }

    .desktop {
        display: block;
    }

    header.desktop {
        display: none;
    }

    header.desktop {
        display: block;
    }

    .header-mobile {
        background-color: #fff;
        box-shadow: 0px -1px 5px 3px rgba(0, 0, 0, 0.2);
        display: flex;
        flex-wrap: wrap;
        height: 50px;
        left: 0px;
        padding: 7.5px 15px;
        position: fixed;
        top: 0px;
        transition: transform .3s;
        width: 100%;
        z-index: 500;
    }

    .categories .categories-head,
    .header-mobile {
        display: none;
    }

    .header-mobile .logo-mobile {
        height: 35px;
        margin-right: 10px;
        width: 35px;
    }

    .header-mobile .search-mobile {
        width: calc(100% - 92px);
    }

    .header-mobile .hamburger-menu {
        height: 35px;
        margin-left: 10px;
        width: 35px;
    }

    .search-suggestions {
        background: #fff;
        border-radius: 0 0 5px 5px;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
        display: none;
        left: 15px;
        position: absolute;
        top: calc(100% - 8px);
        width: calc(100% - 30px);
    }

    .header-mobile .search-suggestions {
        border-top: 1px solid #d9d9d9;
        display: none;
        left: 0px;
        position: fixed;
        top: 50px;
        width: 100%;
    }

    .search-suggestions__head {
        padding: 10px 15px;
    }

    .search-suggestions__body {
        height: 400px;
        overflow-y: scroll;
        padding: 0 7px 15px;
    }

    .search-suggestions__foot {
        border-top: 1px solid #d9d9d9;
        padding: 8px 10px;
        text-align: center;
    }

    .search-suggestions__foot a {
        border-radius: 5px;
        color: #333;
        display: block;
        font-size: 0.87rem;
        font-weight: 700;
        margin: 0 auto;
        max-width: -webkit-fit-content;
        max-width: -moz-fit-content;
        max-width: fit-content;
        padding: 8px 15px;
    }

    #menuToggle {
        display: block;
        left: 7px;
        position: relative;
        top: 7px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        z-index: 900;
    }

    input[type=checkbox] {
        display: none;
        float: left;
        margin: 0;
        position: relative;
        top: 2px;
    }

    #menuToggle input {
        -webkit-touch-callout: none;
        cursor: pointer;
        display: block;
        height: 35px;
        left: -14px;
        opacity: 0;
        position: absolute;
        top: -7px;
        width: 35px;
        z-index: 950;
    }

    #menuToggle span {
        background: #666;
        border-radius: 3px;
        display: block;
        height: 3px;
        margin-bottom: 5px;
        position: relative;
        transform-origin: 3px 0;
        transition: transform .5s cubic-bezier(.77, .2, .05, 1), background .5s cubic-bezier(.77, .2, .05, 1), opacity .55s ease;
        width: 29px;
        z-index: 930;
    }

    #menuToggle span:nth-last-child(2) {
        transform-origin: 0 100%;
    }

    #menu {
        -webkit-font-smoothing: antialiased;
        background: #f4f6f9;
        border-left: 1px solid #d9d9d9;
        height: calc(100vh + 3px);
        left: 60px;
        list-style-type: none;
        margin: -15px 0 0 -15px;
        max-width: 376px;
        padding: 15px;
        position: absolute;
        top: -3px;
        transform: none;
        transform-origin: 0 0;
        transition: transform .3s cubic-bezier(.77, .2, .05, 1);
        width: 100vw;
        z-index: 900;
    }

    ul {
        list-style-type: none;
    }

    #menuToggle a {
        color: #333;
        text-decoration: none;
        transition: color .3s ease;
    }

    .fa-pen::before {
        content: "\f304";
    }

    .fa-sign-in-alt::before {
        content: "\f2f6";
    }

    .fa-bug::before {
        content: "\f188";
    }

    .fa-shield-alt::before {
        content: "\f3ed";
    }

    .fa-book::before {
        content: "\f02d";
    }

    .fa-dollar-sign::before {
        content: "\f155";
    }

    .fa-info-square::before {
        content: "\f30f";
    }

    .fa-newspaper::before {
        content: "\f1ea";
    }

    .desktop-inline-block {
        display: none;
    }

    .desktop-inline-block {
        display: inline-block;
    }

    .fa-phone::before {
        content: "\f095";
    }

    :root .fa-rotate-90,
    :root .fa-rotate-180,
    :root .fa-rotate-270,
    :root .fa-flip-horizontal,
    :root .fa-flip-vertical,
    :root .fa-flip-both {
        -webkit-filter: none;
        filter: none;
    }

    .fa-user::before {
        content: "\f007";
    }

    .fa-paw::before {
        content: "\f1b0";
    }

    .fa-cube::before {
        content: "\f1b2";
    }

    .fa-frown::before {
        content: "\f119";
    }

    .fa-upload::before {
        content: "\f093";
    }

    .header-search {
        margin-top: 7px;
    }

    .header-search .form-header-search {
        position: relative;
    }

    .header-search .form-header-search .input-search {
        background: #f4f6f9;
        border: 1px solid #d4d6d9;
        height: 35px;
        padding-right: 45px;
    }

    .header-search .form-header-search button {
        background: none;
        border: none;
        font-size: 18px;
        height: 35px;
        position: absolute;
        right: 0px;
        top: 0px;
        width: 45px;
    }

    .header-mobile .logo-mobile img {
        max-height: 100%;
    }

    .navigation-wrapper {
        background-color: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
        height: 50px;
    }

    .navigation-wrapper .menu-center>ul {
        display: flex;
        justify-content: flex-end;
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .navigation-wrapper .menu-center>ul>li {
        text-align: center;
        width: 20%;
    }

    .navigation-wrapper .menu-center>ul>li .menu-item {
        height: 50px;
        padding: 8px;
        position: relative;
    }

    .navigation-wrapper .menu-center>ul>li .link {
        background-color: rgba(228, 230, 233, 0);
        border: none;
        border-radius: 5px;
        color: #333;
        display: block;
        height: 34px;
        line-height: 40px;
        margin: 0;
        transition: .3s;
        width: 40px;
    }

    .option-dropdown {
        background: #fff;
        border: 1px solid #d9d9d9;
        border-radius: 5px;
        display: none;
        padding: 8px;
        width: 200px;
    }

    .navigation-wrapper .brief-user {
        display: none;
        position: absolute;
        right: 10px;
        top: calc(100% - 1px);
        width: 234px;
    }

    .option-dropdown ul li a,
    .option-dropdown ul li button {
        background: none;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        display: block;
        font-size: 0.93rem;
        padding: 8px;
        text-align: left;
        width: 100%;
    }

    .option-dropdown ul li a i,
    .option-dropdown ul li button i {
        margin-right: 5px;
        width: 20px;
    }

    .fa-bell::before {
        content: "\f0f3";
    }

    .fa-plus-circle::before {
        content: "\f055";
    }

    .navigation-wrapper .menu-center>ul>li .link i::before {
        color: #333;
        font-size: 22px;
    }

    .block-dropdowns {
        background: #fff;
        border: 1px solid #d9d9d9;
        border-radius: 5px;
        padding: 15px;
        width: 320px;
    }

    .brief-notice {
        display: none;
        padding: 7.5px 7.5px 10px;
        position: absolute;
        right: 10px;
        top: calc(100% - 1px);
    }

    .block-dropdowns__head {
        border-bottom: 1px solid #d9d9d9;
        margin: 0 -15px;
        padding: 0 15px;
        text-align: left;
    }

    .brief-notice__head {
        margin: 0 -7.5px;
        padding: 7.5px 15px 0;
    }

    .block-dropdowns__head h4 {
        margin: 0 0 15px;
    }

    .fa-plus-circle::before {
        content: "\f055";
    }

    .navigation-wrapper .logo {
        max-height: 50px;
    }

    .navigation-wrapper .logo a {
        display: block;
        padding: 10px 0;
    }

    .navigation-wrapper .logo a img {
        max-width: 182px;
    }
    </style>
</head>

<body class=" search-result-page">

    <div class="container-fuild">
        <header class="header desktop">
            <div class="navigation-wrapper">

                <div class="container-fluid p-0 mb-3">
                    <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
                        <a href="" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">News</span>Room</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="{{route('.handle-Login')}}" class="nav-item nav-link active">Menu</a>
                                <a href="single.html" class="nav-item nav-link">Tin tức</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Danh mục</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="#" class="dropdown-item">Ví giấy tờ</a>
                                        <a href="#" class="dropdown-item">Thú cưng</a>
                                        <a href="#" class="dropdown-item">Điện thoại/Tablet/Laptop</a>
                                        <a href="#" class="dropdown-item">Xe máy</a>
                                        <a href="#" class="dropdown-item">Đồ vật khác</a>
                                    </div>
                                </div>
                                <a href="contact.html" class="nav-item nav-link">Liên hệ</a>
                            </div>
                            <!-- Load icon library -->
                            <link rel="stylesheet"
                                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                            <!-- The form -->
                            <form class="example" action="action_page.php">
                                <input type="text" placeholder="Search.." name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>

                            <div class="input-group ml-auto" style="width: 100%; max-width: 300px;">
                            </div>
                        </div>
                </div>
            </div>
        </header>

        <div class="header-mobile">
            <div class="logo-mobile">
                <a href="https://timdothatlac.vn">
                    <img width="35" height="35" alt="logo" src="/storage/images/settings/63126ff7e56a1.png">
                </a>
            </div>
            <div class="search-mobile">
                <div class="header-search">
                    <form class="form-header-search" action="https://timdothatlac.vn/ket-qua-tim-kiem" method="GET">
                        <input name="keywords" class="input-search" id="search_mobile"
                            aria-label="Nhập thông tin tìm kiếm" type="text" placeholder="Nhập tên trong giấy tờ..."
                            autocomplete="off">
                        <button aria-label="Tìm kiếm" type="submit">
                            <i class="fal fa-search"></i>
                        </button>
                    </form>

                </div>
            </div>
            <div class="hamburger-menu">
                <nav role="navigation">
                    <div id="menuToggle">
                        <div class="overlay menu-overlay"></div>
                        <!--
        A fake / hidden checkbox is used as click reciever,
        so you can use the :checked selector on it.
        -->


                        <!--
        Some spans to act as a hamburger.

        They are acting like a real hamburger,
        not that McDonalds stuff.
        -->
                        <span></span>
                        <span></span>
                        <span></span>

                        <!--
        Too bad the menu has to be inside of the button
        but hey, it's pure CSS magic.
        -->

                </nav>

            </div>
        </div>

        <style>
        .col-lg-6 {

            -ms-flex: 0 0 70%;
            flex: 0 0 70%;
            max-width: 70%;
        }

        .sticky-top {
            margin-top: 1px;
            position: -webkit-sticky;
            position: sticky;
            top: 70px;
            z-index: 90;
        }

        .home-page h1,
        .sidebar-left,
        .sidebar-right {
            display: none;
        }

        .sidebar-left,
        .sidebar-right {
            display: block;
        }

        .both-sides-title {
            display: flex;
            justify-content: space-between;
        }

        .block {
            background: #fff;
            box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
            padding: 12px;
        }

        .block,
        .user-information {
            border-radius: 5px;
        }

        .news {
            display: flex;
            flex-wrap: wrap;
            padding: 0 0 10px;
        }

        .news-list-column .news {
            padding-bottom: 12px;
        }

        .news-list-column :last-child.news {
            padding-bottom: 0px;
        }

        .news .news_image {
            border-radius: 3px;
            max-height: 70px;
            overflow: hidden;
            width: 32%;
        }

        .news-list-column .news .news_image {
            border-radius: 5px;
            max-height: 80px;
            width: 40%;
        }

        .news .news_title {
            width: 100%;
        }

        .news-list-column .news .news_title {
            padding-left: 12px;
            width: 60%;
        }

        .news .news_title a {
            color: #333;
            text-decoration: none;
        }

        .news .news_title a h3 {
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            font-size: 0.81rem;
            line-height: 16px;
            margin: 5px 0;
            max-height: 40px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .news-list-column .news .news_title h3 {
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            font-size: 0.93rem;
            line-height: 1.12rem;
            margin-top: 0px;
            max-height: 54px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .news .news_image img {
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center;
            object-position: center;
            transition: .2s linear;
            width: 100%;
        }

        .both-sides-title a:not(.btn-danger) {
            margin: 10px 0;
            text-decoration: underline;
        }

        .wrapper .contents {
            margin-bottom: 20vh;
        }

        .entity {
            background: #fff;
            border-radius: 5px;
            box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
            width: 100%;
        }

        .ads-right .item img,
        .posts {
            width: 100%;
        }

        .posts {
            background: #fff;
            border-bottom: 1px dashed #d9d9d9;
            display: flex;
            flex-wrap: wrap;
            margin: 5px 0 0;
            padding: 0 0 15px;
        }

        .posts {
            border-bottom: none;
            border-radius: 5px;
            box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
            margin-top: 15px;
            padding: 0;
        }

        .posts .title-mobile {
            width: 100%;
        }

        .posts .title-mobile {
            display: none;
        }

        .posts .image {
            background-color: #333;
            display: flex;
            justify-content: center;
            max-height: 102px;
            overflow: hidden;
            position: relative;
            width: 45%;
        }

        /* @media screen and (min-width:480px) */
        .posts .image {
            max-height: 120px;
        }

        /* @media screen and (min-width:640px) */
        .posts .image {
            max-height: 130px;
        }

        .posts a.image {
            border-radius: 5px 0 0 5px;
            max-height: 165px;
            width: 35%;
        }

        .posts .info {
            align-self: flex-start;
            display: flex;
            flex-wrap: wrap;
            padding-left: 12px;
            width: 55%;
        }

        .posts .info {
            padding: 10px 15px;
            width: 65%;
        }

        .posts .title-desktop {
            display: none;
            width: 100%;
        }

        .posts .title-desktop {
            display: block;
        }

        .posts .description {
            width: 100%;
        }

        .posts .additional-info {
            color: #333;
            display: flex;
            flex-wrap: wrap;
            font-size: 0.87rem;
        }

        .posts .additional-info {
            display: flex;
            margin-bottom: 5px;
            width: 100%;
        }

        .posts .additional-info .address {
            display: none;
            width: 100%;
        }

        .posts .additional-info .address {
            display: block;
            width: 50%;
        }

        .posts .additional-info .time {
            display: block;
            text-align: right;
            width: 50%;
        }

        .posts .additional-info .cate {
            display: block;
            margin-bottom: 0px;
            width: 50%;
        }

        .fa-clock::before {
            content: "\f017";
        }

        .fa-map-marker-alt::before {
            content: "\f3c5";
        }

        .posts .additional-info i,
        .posts .additional-info i.fal {
            font-size: 13px;
            text-align: center;
            width: 16px;
        }

        .posts .description p {
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            color: #666;
            display: -webkit-box;
            font-size: 0.93rem;
            line-height: 1.12rem;
            margin-bottom: 10px;
            max-height: 54px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .posts .description p {
            margin-bottom: 8px;
        }

        .posts .title-desktop h3 {
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            font-size: 1.12rem;
            line-height: 1.37rem;
            margin: 5px 0 10px;
            max-height: 44px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .posts .image img {
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center;
            object-position: center;
            width: 100%;
        }

        .posts a.image img {
            transition: .2s linear;
        }

        .posts .title-mobile h3 {
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            font-size: 1.25rem;
            line-height: 1.5rem;
            max-height: 48px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .entity .entity-head {
            border-bottom: 1px solid #d9d9d9;
            box-sizing: border-box;
            display: flex;
            justify-content: space-between;
            padding: 10px 15px;
        }

        .entity-info__head {
            border-bottom: 1px solid #d9d9d9;
            display: flex;
            justify-content: space-between;
            padding: 15px;
        }

        .comments .item-parent {
            display: flex;
            padding: 15px;
        }

        .img-user-text-32 {
            background: #28a745;
            border-radius: 50%;
            box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.1);
            display: flex;
            height: 32px;
            justify-content: center;
            width: 32px;
        }

        .comments .content_comment {
            background: #f3f3f3;
            border-radius: 15px;
            margin-left: 10px;
            padding: 10px 12px;
            position: relative;
        }

        .comments .content-additional {
            color: #333;
            display: flex;
            font-size: 13px;
            margin-left: 25px;
            margin-top: 5px;
        }

        .comments .items-child .item {
            display: flex;
            margin-top: 10px;
            padding-left: 12px;
        }

        .comments .items-child .item .img-user-text-32 {
            height: 24px;
            width: 24px;
        }

        .comments .content_comment__head {
            color: #000;
            font-size: 0.87rem;
        }

        .comments .content_comment>p {
            color: #000;
            font-size: 15px;
            margin-bottom: 10px;
            margin-top: 5px;
        }

        .comments .comment-action {
            opacity: 0;
            position: absolute;
            right: 6px;
            top: 5px;
            transition: .2s;
        }

        .comments .comment-action button.btn {
            background: none;
            border: none;
            border-radius: 50%;
            color: #999;
            cursor: pointer;
            font-size: 13px;
            height: 30px;
            line-height: 30px;
            width: 30px;
        }

        .comments .content_comment__head strong {
            font-weight: 600;
            text-transform: capitalize;
        }

        .text-success {
            color: #28a745;
        }

        .fa-shield-check::before {
            content: "\f2f7";
        }

        .img-user-text-32 p {
            color: #fff;
            display: block;
            font-size: 18px;
            font-weight: 500;
            height: 32px;
            line-height: 32px;
            margin: 0;
            text-align: center;
            width: 32px;
        }

        .comments .items-child .item .img-user-text-32 p {
            font-size: 1rem;
            height: 24px;
            line-height: 24px;
            width: 24px;
        }

        .entity-info__head .info-left {
            display: flex;
        }

        .entity-info__head .info-right {
            display: flex;
            font-size: 14px;
        }

        .entity-info__head .share {
            display: flex;
        }

        ul {
            list-style-type: none;
        }

        #social-links ul {
            display: flex;
            list-style-type: none;
            padding-left: 0px;
        }

        #social-links ul li {
            margin-left: 10px;
        }

        #social-links ul li a {
            display: block;
            height: 20px;
            overflow: hidden;
            width: 20px;
        }

        .fa-linkedin {
            color: #0e76a8;
        }

        .fa-linkedin::before {
            content: "\f08c";
        }

        .fa-twitter::before {
            content: "\f099";
        }

        .fa-facebook-square::before {
            content: "\f082";
        }

        #social-links ul li .fab {
            font-size: 1.25rem;
        }

        .fa-twitter {
            color: #1da1f2;
        }

        .fa-facebook-square {
            color: #4267b2;
        }

        .entity-info__head .info-left .number-item {
            display: flex;
            font-size: 0.93rem;
            font-weight: 500;
            margin-right: 10px;
        }

        .fa-eye::before {
            content: "\f06e";
        }

        .fa-comment::before {
            content: "\f075";
        }

        .entity-info__head .info-left .number-item i {
            align-items: center;
            display: flex;
            margin-right: 5px;
        }

        .entity-info__head .info-left .number-item span {
            display: none;
        }

        .entity-info__head .info-left .number-item span {
            display: block;
            margin-left: 5px;
        }

        .posts-info {
            color: #333;
            display: flex;
            flex-wrap: wrap;
            font-size: 0.93rem;
            font-weight: 600;
            padding: 10px 15px;
        }

        .posts-title {
            padding: 15px 15px 10px;
        }

        .posts-content>p {
            font-size: 1rem;
            line-height: 1.37rem;
            margin-bottom: 5px;
            padding: 0 15px;
        }

        .posts-content>a {
            display: block;
            max-height: 333px;
            overflow: hidden;
        }

        .posts-content img {
            border-bottom: 1px solid #d9d9d9;
            border-top: 1px solid #d9d9d9;
            cursor: pointer;
            display: block;
            max-height: 333px;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center;
            object-position: center;
            width: 100%;
        }

        .posts-info .address {
            margin-bottom: 10px;
        }

        h1 {
            line-height: 1.5rem;
        }

        .posts-title h1 {
            font-size: 1.12rem;
            margin: 0;
        }

        .posts-info .cate {
            width: 100%;
        }

        .posts-info :first-child.cate {
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .fa-bars::before {
            content: "\f0c9";
        }

        .fa-frown::before {
            content: "\f119";
        }

        .posts-info .cate i.fal {
            margin-right: 5px;
            text-align: center;
            width: 18px;
        }

        .entity .entity-head__left {
            display: flex;
            justify-content: flex-start;
        }

        .entity .entity-head__right {
            position: relative;
        }

        .entity .entity-head__right .btn-dropdown {
            background: none;
            border: none;
            border-radius: 50%;
            font-size: 16px;
            height: 36px;
            width: 36px;
        }

        .option-dropdown {
            background: #fff;
            border: 1px solid #d9d9d9;
            border-radius: 5px;
            display: none;
            padding: 8px;
            width: 200px;
        }

        .entity .entity-head__right .option-dropdown {
            position: absolute;
            right: 0px;
            top: 100%;
        }

        .option-dropdown ul li a,
        .option-dropdown ul li button {
            background: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            font-size: 0.93rem;
            padding: 8px;
            text-align: left;
            width: 100%;
        }

        .fa-handshake::before {
            content: "\f2b5";
        }

        .fa-upload::before {
            content: "\f093";
        }

        .fa-link::before {
            content: "\f0c1";
        }

        .fa-pen::before {
            content: "\f304";
        }

        .option-dropdown ul li a i,
        .option-dropdown ul li button i {
            margin-right: 5px;
            width: 20px;
        }

        .fa-ellipsis-v-alt::before {
            content: "\f39c";
        }

        .entity .entity-head__left .img-user {
            align-items: center;
            background: #28a745;
            border-radius: 50%;
            box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
            display: flex;
            height: 36px;
            justify-content: center;
            width: 36px;
        }

        .entity .entity-head__left .info-right {
            display: flex;
            flex-flow: column;
            margin-left: 15px;
        }

        .entity .entity-head__left .info-right .user-name {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .entity .entity-head__left .info-right .time-public {
            color: #666;
            font-size: 13px;
        }

        .entity .entity-head__left .img-user img {
            border-radius: 50%;
            box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.1);
            max-width: 100%;
        }

        .header-mobile {
            background-color: #fff;
            box-shadow: 0px -1px 5px 3px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-wrap: wrap;
            height: 50px;
            left: 0px;
            padding: 7.5px 15px;
            position: fixed;
            top: 0px;
            transition: transform .3s;
            width: 100%;
            z-index: 500;
        }

        .categories .categories-head,
        .header-mobile {
            display: none;
        }

        .categories .categories-body ul {
            display: flex;
            flex-wrap: wrap;
        }

        .line {
            background: #d9d9d9;
            height: 1px;
            margin: 5px 8px;
            width: calc(100% - 16px);
        }

        .categories .categories-body ul li {
            width: 100%;
        }

        .categories .categories-body ul .line {
            margin: 10px 0;
            width: 68%;
        }

        .categories .categories-body ul li a {
            border-radius: 5px;
            color: #333;
            display: block;
            font-size: 1rem;
            font-weight: 700;
            padding: 8px;
            width: 100%;
        }

        .fa-bug::before {
            content: "\f188";
        }

        .fa-shield-alt::before {
            content: "\f3ed";
        }

        .fa-book::before {
            content: "\f02d";
        }

        .fa-dollar-sign::before {
            content: "\f155";
        }

        .fa-info-square::before {
            content: "\f30f";
        }

        .fa-newspaper::before {
            content: "\f1ea";
        }

        .fa-phone::before {
            content: "\f095";
        }

        :root .fa-rotate-90,
        :root .fa-rotate-180,
        :root .fa-rotate-270,
        :root .fa-flip-horizontal,
        :root .fa-flip-vertical,
        :root .fa-flip-both {
            -webkit-filter: none;
            filter: none;
        }

        .fa-search::before {
            content: "\f002";
        }

        .fa-user::before {
            content: "\f007";
        }

        .fa-paw::before {
            content: "\f1b0";
        }

        .fa-cube::before {
            content: "\f1b2";
        }

        .categories .categories-body ul li a i {
            font-size: 20px;
            margin-right: 10px;
            text-align: center;
            width: 22px;
        }

        .desktop-inline-block {
            display: none;
        }

        .desktop-inline-block {
            display: inline-block;
        }

        .header {
            left: 0px;
            position: fixed;
            right: 0px;
            top: 0px;
            z-index: 100;
        }

        .desktop {
            display: block;
        }

        header.desktop {
            display: none;
        }

        header.desktop {
            display: block;
        }

        .header-mobile .logo-mobile {
            height: 35px;
            margin-right: 10px;
            width: 35px;
        }

        .header-mobile .search-mobile {
            width: calc(100% - 92px);
        }

        .header-mobile .hamburger-menu {
            height: 35px;
            margin-left: 10px;
            width: 35px;
        }

        .search-suggestions {
            background: #fff;
            border-radius: 0 0 5px 5px;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
            display: none;
            left: 15px;
            position: absolute;
            top: calc(100% - 8px);
            width: calc(100% - 30px);
        }

        .header-mobile .search-suggestions {
            border-top: 1px solid #d9d9d9;
            display: none;
            left: 0px;
            position: fixed;
            top: 50px;
            width: 100%;
        }

        .search-suggestions__head {
            padding: 10px 15px;
        }

        .search-suggestions__body {
            height: 400px;
            overflow-y: scroll;
            padding: 0 7px 15px;
        }

        .search-suggestions__foot {
            border-top: 1px solid #d9d9d9;
            padding: 8px 10px;
            text-align: center;
        }

        .search-suggestions__foot a {
            border-radius: 5px;
            color: #333;
            display: block;
            font-size: 0.87rem;
            font-weight: 700;
            margin: 0 auto;
            max-width: -webkit-fit-content;
            max-width: -moz-fit-content;
            max-width: fit-content;
            padding: 8px 15px;
        }

        .loading {
            display: none;
        }

        .loading {
            font-size: 0.93rem;
            margin: 50px auto;
            text-align: center;
        }

        .lds-dual-ring {
            display: inline-block;
            height: 50px;
            width: 50px;
        }

        .lds-dual-ring::after {
            -webkit-animation: lds-dual-ring 1s linear infinite;
            animation: lds-dual-ring 1s linear infinite;
            border-color: #d9d9d9 transparent;
            border-radius: 50%;
            border-style: solid;
            border-width: 4px;
            content: " ";
            display: block;
            height: 50px;
            width: 50px;
        }

        #menuToggle {
            display: block;
            left: 7px;
            position: relative;
            top: 7px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            z-index: 900;
        }

        input[type=checkbox] {
            display: none;
            float: left;
            margin: 0;
            position: relative;
            top: 2px;
        }

        #menuToggle input {
            -webkit-touch-callout: none;
            cursor: pointer;
            display: block;
            height: 35px;
            left: -14px;
            opacity: 0;
            position: absolute;
            top: -7px;
            width: 35px;
            z-index: 950;
        }

        #menuToggle span {
            background: #666;
            border-radius: 3px;
            display: block;
            height: 3px;
            margin-bottom: 5px;
            position: relative;
            transform-origin: 3px 0;
            transition: transform .5s cubic-bezier(.77, .2, .05, 1), background .5s cubic-bezier(.77, .2, .05, 1), opacity .55s ease;
            width: 29px;
            z-index: 930;
        }

        #menuToggle span:nth-last-child(2) {
            transform-origin: 0 100%;
        }

        #menu {
            -webkit-font-smoothing: antialiased;
            background: #f4f6f9;
            border-left: 1px solid #d9d9d9;
            height: calc(100vh + 3px);
            left: 60px;
            list-style-type: none;
            margin: -15px 0 0 -15px;
            max-width: 376px;
            padding: 15px;
            position: absolute;
            top: -3px;
            transform: none;
            transform-origin: 0 0;
            transition: transform .3s cubic-bezier(.77, .2, .05, 1);
            width: 100vw;
            z-index: 900;
        }

        #menuToggle a {
            color: #333;
            text-decoration: none;
            transition: color .3s ease;
        }

        .header-search {
            margin-top: 7px;
        }

        .header-search .form-header-search {
            position: relative;
        }

        input[type=datetime],
        input[type=email],
        input[type=number],
        input[type=password],
        input[type=search],
        input[type=tel],
        input[type=text],
        input[type=url] {
            box-shadow: none;
            color: #1a1a1a;
            filter: none;
            font-size: 15px;
            margin-top: 0px;
            outline: none;
            padding: 14px;
        }

        input[type=datetime],
        input[type=email],
        input[type=number],
        input[type=password],
        input[type=search],
        input[type=tel],
        input[type=text],
        input[type=url],
        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            -o-appearance: none;
            appearance: none;
            background: #fff;
            border: 1px solid #d9d9d9;
            border-radius: 3px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            box-sizing: border-box;
            height: 40px;
            letter-spacing: 0px;
            line-height: 20px;
            width: 100%;
        }

        .header-search .form-header-search .input-search {
            background: #f4f6f9;
            border: 1px solid #d4d6d9;
            height: 35px;
            padding-right: 45px;
        }

        .header-search .form-header-search button {
            background: none;
            border: none;
            font-size: 18px;
            height: 35px;
            position: absolute;
            right: 0px;
            top: 0px;
            width: 45px;
        }

        .header-mobile .logo-mobile img {
            max-height: 100%;
        }

        .navigation-wrapper {
            background-color: #fff;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
            height: 50px;
        }

        .navigation-wrapper .menu-center>ul {
            display: flex;
            justify-content: flex-end;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .navigation-wrapper .menu-center>ul>li {
            text-align: center;
            width: 20%;
        }

        .navigation-wrapper .menu-center>ul>li .menu-item {
            height: 50px;
            padding: 8px;
            position: relative;
        }

        .navigation-wrapper .menu-center>ul>li .link {
            background-color: rgba(228, 230, 233, 0);
            border: none;
            border-radius: 5px;
            color: #333;
            display: block;
            height: 34px;
            line-height: 40px;
            margin: 0;
            transition: .3s;
            width: 40px;
        }

        .navigation-wrapper .brief-user {
            display: none;
            position: absolute;
            right: 10px;
            top: calc(100% - 1px);
            width: 234px;
        }

        .fa-bell::before {
            content: "\f0f3";
        }

        .fa-plus-circle::before {
            content: "\f055";
        }

        .navigation-wrapper .menu-center>ul>li .link i::before {
            color: #333;
            font-size: 22px;
        }

        .block-dropdowns {
            background: #fff;
            border: 1px solid #d9d9d9;
            border-radius: 5px;
            padding: 15px;
            width: 320px;
        }

        .brief-notice {
            display: none;
            padding: 7.5px 7.5px 10px;
            position: absolute;
            right: 10px;
            top: calc(100% - 1px);
        }

        .block-dropdowns__head {
            border-bottom: 1px solid #d9d9d9;
            margin: 0 -15px;
            padding: 0 15px;
            text-align: left;
        }

        .brief-notice__head {
            margin: 0 -7.5px;
            padding: 7.5px 15px 0;
        }

        .block-dropdowns__head h4 {
            margin: 0 0 15px;
        }

        .fa-plus-circle::before {
            content: "\f055";
        }

        .navigation-wrapper .logo {
            max-height: 50px;
        }

        .navigation-wrapper .logo a {
            display: block;
            padding: 10px 0;
        }

        .navigation-wrapper .logo a img {
            max-width: 182px;
        }
        </style>

        <div class="container">
            <div class="wrapper">
                <div class="row">
                    @csrf
                    <div class="col-lg-6">
                        <div class="contents">
                            @foreach($PostDetail as $key => $detail)
                            <div class="posts-item entity">
                                <div class="posts-item-head entity-head">
                                    <div class="entity-head__left">
                                        <div class="img-user">

                                            <img alt="avatar-user"
                                                src="https://graph.facebook.com/v3.3/3415796385409183/picture?type=normal">
                                        </div>
                                        <div class="info-right">
                                            <span class="user-name">{{$detail->TenTK}}</span>

                                            <span class="time-public">{{$detail->ngaydang}}</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="posts-item-body">
                                    <div class="posts-info">
                                        <div class="cate">
                                            <!-- <i class="fal fa-frown"></i> -->
                                            Tin cần tìm
                                        </div>
                                        <div class="cate">
                                            <!-- <i class="fal fa-bars"></i> -->
                                            {{$detail->loaidovat_id}}
                                        </div>
                                    </div>
                                    <div class="posts-title">
                                        <h1>{{$detail->Title}}</h1>
                                    </div>
                                    <div class="posts-content">
                                        <p>
                                            {{$detail->noidung}}
                                        </p>

                                        <div class="posts-info">
                                            <div class="address">
                                                <!-- <i class="fal fa-map-marker-alt"></i>&nbsp; -->
                                                TP Hồ Chí Minh

                                                , {{$detail->quan_id}}

                                                , {{$detail->phuong_id}}
                                            </div>
                                            <img width="100%" height="100%" src="{{asset('anh/')}}/{{$detail->image}}">
                                        </div>
                                    </div>
                                    <div class="posts-item-foot">
                                        <div class="entity-info">
                                            <div class="entity-info__head">
                                                <div class="info-left">
                                                    <div class="number-item number-like">
                                                        <i class="fal fa-comment"></i>
                                                        2 <span>bình luận</span>
                                                    </div>
                                                    <div class="number-item number-view">
                                                        <!-- Đăng tin -->
                                                        2.1K <span>lượt xem</span>
                                                    </div>
                                                </div>
                                                <div class="info-right">

                                                    <!-- <div class="share">
                                                    <div class="share-title">Share:</div>
                                                    <div id="social-links">
                                                        <ul>
                                                            <li><a title="" class="social-button "
                                                                    href="https://www.facebook.com/sharer/sharer.php?u=https://www.timdothatlac.vn/posts/roi-hop-sac-airpod-pro-trong-khu-vuc-nga-tu-bui-huu-nghia-toi-tran-binh-trong-quan-5-tp-hcm"
                                                                    target="_blank" rel=""><span
                                                                        class="fab fa-facebook-square"></span>&nbsp;Facebook</a>
                                                            </li>
                                                            <li><a title="" class="social-button "
                                                                    href="https://twitter.com/intent/tweet?text=&amp;url=https://www.timdothatlac.vn/posts/roi-hop-sac-airpod-pro-trong-khu-vuc-nga-tu-bui-huu-nghia-toi-tran-binh-trong-quan-5-tp-hcm"
                                                                    target="_blank" rel=""><span
                                                                        class="fab fa-twitter"></span>&nbsp;Twitter</a>
                                                            </li>
                                                            <li><a title="" class="social-button "
                                                                    href="https://www.linkedin.com/sharing/share-offsite?mini=true&amp;url=https://www.timdothatlac.vn/posts/roi-hop-sac-airpod-pro-trong-khu-vuc-nga-tu-bui-huu-nghia-toi-tran-binh-trong-quan-5-tp-hcm&amp;title=&amp;summary="
                                                                    target="_blank" rel=""><span
                                                                        class="fab fa-linkedin"></span>&nbsp;Linkedin</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div> -->
                                                </div>
                                            </div>
                                            <div class="entity-info__foot">
                                                @foreach($PostDetail as $key => $Comment )
                                                <div class="comments">


                                                    <div class="comments__body">
                                                        @if(Auth::check())
                                                        <form method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group">
                                                                <legend></legend>
                                                                <label for="">Nội dung bình luận </label>
                                                                <input type="text" class="hidden" name="bai_viet_id"
                                                                    value="{{$Comment->id}}">
                                                                <div class="img-user-text-32">
                                                                </div>
                                                                <textarea name="noidung" class="form-control" cols="3"
                                                                    placeholder="Viết bình luận...">
                                                                </textarea>
                                                                <label for="img">Select image:</label>
                                                                <input type="file" id="img" name="anh"
                                                                    accept="anh/gif, anh/jpeg, anh/png, anh/jpg"
                                                                    onchange="chooseFile(this)">
                                                            </div>
                                                            <button type="submit">Đăng</button>
                                                        </form>
                                                        @else
                                                        <button class="btn btn-danger" type="submit"><a
                                                                style="color:white;" href="{{route('user_Login')}}">Đăng
                                                                nhập để bình
                                                                luận</a></button>
                                                        @endif
                                                        <div class="item-parent">
                                                            @foreach($ListComment as $Comment)
                                                            @if($Comment->bai_viet_id === $detail->id)

                                                            <div class="img-user-text-32">
                                                            </div>
                                                            <div class="content-center">
                                                                <div class="content_comment">
                                                                    <div class="content_comment__head">
                                                                        {{$Comment->tenTK}}
                                                                    </div>
                                                                    <img width="50%"
                                                                        src="{{asset('anh/')}}/{{$Comment->image}}">
                                                                    <p>{{$Comment->noidung}}</p>
                                                                    <div class="comment-action">
                                                                        <button class="btn" type="button">
                                                                            <i class="fal fa-ellipsis-h-alt"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="content-additional">

                                                                    <span>{{$Comment->created_at}}</span>
                                                                </div>

                                                                <div class="items-child">
                                                                    @foreach($ListComment as $Comment2)
                                                                    @if($Comment->id === $Comment2->parent_id)
                                                                    <div class="item">
                                                                        <div class="img-user-text-32">
                                                                        </div>
                                                                        <div class="content">
                                                                            <div class="content_comment">
                                                                                <div class="content_comment__head">
                                                                                    <strong>{{$Comment2->tenTK}}</strong>&nbsp;
                                                                                </div>
                                                                                <p>{{$Comment2->noidung}}
                                                                                </p>
                                                                                <div class="comment-action">
                                                                                    <button class="btn" type="button">
                                                                                        <i
                                                                                            class="fal fa-ellipsis-h-alt"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="content-additional">
                                                                                <span>1 ngày trước</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endif
                                                                    @endforeach
                                                                </div>

                                                            </div>
                                                            @endif
                                                            @endforeach

                                                        </div>
                                                    </div>

                                                </div>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <aside class="sidebar-right sticky-top">
                                <!-- <div class="both-sides-title">
                                <h2>Bài viết</h2>
                                <a href="">Xem tất cả</a>
                            </div>

                            <div class="block news-list-column">
                                <div class="news">
                                    <div class="news_image">
                                        <a
                                            href="https://timdothatlac.vn/tin-tuc/meo-tim-cho-lac-nhanh-chong-va-hieu-qua">
                                            <img alt="image"
                                                src="/storage/images/news/bd696c9d-661c-4e72-92ce-5317129ad5d9.jpg&#10;                                ">
                                        </a>
                                    </div>
                                    <div class="news_title">
                                        <a
                                            href="https://timdothatlac.vn/tin-tuc/meo-tim-cho-lac-nhanh-chong-va-hieu-qua">
                                            <h3>Mẹo tìm chó lạc nhanh chóng và hiệu quả</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="news">
                                    <div class="news_image">
                                        <a
                                            href="https://timdothatlac.vn/tin-tuc/mot-so-dia-diem-tap-ket-vat-nuoi-bi-bat-trom-tai-tp-ho-chi-minh">
                                            <img alt="image"
                                                src="                                    /storage/images/news/84b1f184-308d-42fe-8ffc-8d173cc07b20.jpg&#10;                                ">
                                        </a>
                                    </div>
                                    <div class="news_title">
                                        <a
                                            href="https://timdothatlac.vn/tin-tuc/mot-so-dia-diem-tap-ket-vat-nuoi-bi-bat-trom-tai-tp-ho-chi-minh">
                                            <h3>Một số địa điểm tập kết vật nuôi bị mất tại TP Hồ Chí Minh</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="news">
                                    <div class="news_image">
                                        <a
                                            href="https://timdothatlac.vn/tin-tuc/meo-tim-meo-lac-nhanh-chong-va-hieu-qua">
                                            <img alt="image"
                                                src="                                    /storage/images/news/ebf1517a-5836-4555-9d11-99df69f89fac.jpg&#10;                                ">
                                        </a>
                                    </div>
                                    <div class="news_title">
                                        <a
                                            href="https://timdothatlac.vn/tin-tuc/meo-tim-meo-lac-nhanh-chong-va-hieu-qua">
                                            <h3>Mẹo tìm mèo lạc nhanh chóng và hiệu quả</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="news">
                                    <div class="news_image">
                                        <a
                                            href="https://timdothatlac.vn/tin-tuc/mot-so-goi-y-cho-nguoi-nhat-duoc-giay-to">
                                            <img alt="image"
                                                src="                                    /storage/images/news/b4216e1f-5190-4b11-93ed-9d2205e53806.jpg&#10;                                ">
                                        </a>
                                    </div>
                                    <div class="news_title">
                                        <a
                                            href="https://timdothatlac.vn/tin-tuc/mot-so-goi-y-cho-nguoi-nhat-duoc-giay-to">
                                            <h3>Mội số gợi ý cho người nhặt được giấy tờ</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="both-sides-title mt-3">
                                <h2>Số điện thoại lừa đảo</h2>
                                <a href="">Xem tất cả</a>
                            </div>

                            <div class="block news-list-column">
                                <div class="news">
                                    <div class="news_image">
                                        <a href="https://timdothatlac.vn/sdt-lua-dao/12">
                                            <img width="100%" height="100%" alt="0569361636"
                                                src="/storage/images/scam_phone_number/3aae0588-fc81-4890-8262-3b42dec69848.jpg">
                                        </a>
                                    </div>
                                    <div class="news_title">
                                        <a href="https://timdothatlac.vn/sdt-lua-dao/12">
                                            <h3>Cảnh báo số điện thoại <span class="text-danger">0569361636</span></h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="news">
                                    <div class="news_image">
                                        <a href="https://timdothatlac.vn/sdt-lua-dao/11">
                                            <img width="100%" height="100%" alt="0367920200"
                                                src="/storage/images/scam_phone_number/e9244ca1-f47c-4be8-81e9-b85381099134.jpg">
                                        </a>
                                    </div>
                                    <div class="news_title">
                                        <a href="https://timdothatlac.vn/sdt-lua-dao/11">
                                            <h3>Cảnh báo số điện thoại <span class="text-danger">0367920200</span></h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="news">
                                    <div class="news_image">
                                        <a href="https://timdothatlac.vn/sdt-lua-dao/7">
                                            <img width="100%" height="100%" alt="0347363547"
                                                src="/storage/images/scam_phone_number/1e9ed99b-c71b-4c43-9066-f005fb61560d.jpg">
                                        </a>
                                    </div>
                                    <div class="news_title">
                                        <a href="https://timdothatlac.vn/sdt-lua-dao/7">
                                            <h3>Cảnh báo số điện thoại <span class="text-danger">0347363547</span></h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="news">
                                    <div class="news_image">
                                        <a href="https://timdothatlac.vn/sdt-lua-dao/6">
                                            <img width="100%" height="100%" alt="0792782094"
                                                src="/storage/images/scam_phone_number/3f70dcd8-f294-4644-9011-0691eb40a55d.jpg">
                                        </a>
                                    </div>
                                    <div class="news_title">
                                        <a href="https://timdothatlac.vn/sdt-lua-dao/6">
                                            <h3>Cảnh báo số điện thoại <span class="text-danger">0792782094</span></h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <br> -->
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay" id="overlay"></div>
            <div id="user-logged" data-logged="0"></div>

            <div class="container-fluid bg-light pt-5 px-sm-3 px-md-5">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-5">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="mb-2 mt-n2 display-5 text-uppercase"><span class="text-primary">News</span>Room
                            </h1>
                        </a>
                        <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd
                            et
                        </p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-secondary text-center mr-2 px-0"
                                style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-secondary text-center mr-2 px-0"
                                style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-secondary text-center mr-2 px-0"
                                style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-secondary text-center mr-2 px-0"
                                style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-secondary text-center mr-2 px-0"
                                style="width: 38px; height: 38px;" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5">
                        <h4 class="font-weight-bold mb-4">Categories</h4>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5">
                        <h4 class="font-weight-bold mb-4">Tags</h4>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5">
                        <h4 class="font-weight-bold mb-4">Quick Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i
                                    class="fa fa-angle-right text-dark mr-2"></i>About</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="fa fa-angle-right text-dark mr-2"></i>Advertise</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="fa fa-angle-right text-dark mr-2"></i>Privacy
                                &
                                policy</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="fa fa-angle-right text-dark mr-2"></i>Terms &
                                conditions</a>
                            <a class="text-secondary" href="#"><i
                                    class="fa fa-angle-right text-dark mr-2"></i>Contact</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid py-4 px-sm-3 px-md-5">
                <p class="m-0 text-center">
                    &copy; <a class="font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed by <a class="font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>







            <script src="base_assets/plugins/jquery/jquery-3.6.0.min.js" type="text/javascript"></script>




            <script src="base_assets/js/base.js" type="text/javascript"></script>

            <script src="client_assets/js/filter/js.js" type="text/javascript"></script>
            <script src="client_assets/js/filter/js.js" type="text/javascript"></script>
            <script src="client_assets/js/search-result/js.js" type="text/javascript"></script>
            <script src="client_assets/js/hamburger-menu/js.js" type="text/javascript"></script>
            <script src="client_assets/js/header/js.js" type="text/javascript"></script>



            <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
            </script>
            <script>
            $('#myModal').on('shown.bs.modal', function() {
                $('#myInput').trigger('focus')
            })
            </script>




            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script src="https://www.googletagmanager.com/gtag/js?id=G-C1YVMK55WY" async=""></script>
            <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-C1YVMK55WY');
            </script>

            <div id="fb-root"></div>
            <div class="fb-customerchat" id="fb-customer-chat" page_id="101930152408187" attribution="biz_inbox"></div>
            <script>
            var chatbox = document.getElementById('fb-customer-chat');
            chatbox.setAttribute("page_id", "101930152408187");
            chatbox.setAttribute("attribution", "biz_inbox");

            window.fbAsyncInit = function() {
                FB.init({
                    xfbml: true,
                    version: 'v13.0'
                });
            };
            </script>

            <script>
            function chooseFile(fileInput) {
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
            </script>

            <script data-src="https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js" data-type="lazy"></script>

            <iframe width="0" height="0" src="https://www.google.com/recaptcha/api2/aframe"
                style="display: none;"></iframe>
            <!-- <script>
            $('#btn-comment').click(function(ev) {
                ev.preventDefault();

            })
            </script> -->

</body>

</html>