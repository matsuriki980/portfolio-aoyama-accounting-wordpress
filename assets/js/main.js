import { initModules } from "./modules/index.js";
import { initTop } from "./pages/top/index.js";
import { initContact } from "./pages/contact/index.js";

// ============================================================
// init
// ============================================================
document.addEventListener("DOMContentLoaded", () => {
  console.log("main.jsを読み込む");
  initModules();
  initTop();
  initContact();
});
