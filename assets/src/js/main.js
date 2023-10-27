import { getUrlPath } from "./helpers/functions";

require("./helpers/common");

let page = getUrlPath();
if (page.length <= 2) page.push("");

switch (page[2]) {
    case "":
        require("./pages/homepage");
        break;
    case "contact-us":
        require("./pages/contact-us");
        break;
    case "about-us":
        require("./pages/about-us");
        break;
    case "private-events":
        require("./pages/private-events");
        break;
    case "menu":
        require("./pages/menu");
        break;
}
