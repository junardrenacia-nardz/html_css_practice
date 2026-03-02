frts = document.querySelectorAll(".highlight-fruits button");
vgs = document.querySelectorAll(".highlight-veggies button");
sncks = document.querySelectorAll(".highlight-snacks button");
resets = document.querySelectorAll(".highlight button");

frts.forEach((frt) => {
  frt.addEventListener("click", function () {
    frt.classList.toggle("active-fruit");
    updateFound();
  });
});

vgs.forEach((vg) => {
  vg.addEventListener("click", function () {
    vg.classList.toggle("active-veggie");
    updateFound();
  });
});

sncks.forEach((snck) => {
  snck.addEventListener("click", function () {
    snck.classList.toggle("active-snack");
    updateFound();
  });
});

function fruitsAll() {
  resetAll();
  frts.forEach((frt) => {
    frt.classList.add("active-fruit");
  });
  updateFound();
}

function veggiesAll() {
  resetAll();
  vgs.forEach((vg) => {
    vg.classList.add("active-veggie");
  });
  updateFound();
}

function snacksAll() {
  resetAll();
  sncks.forEach((snck) => {
    snck.classList.add("active-snack");
  });
  updateFound();
}

function resetAll() {
  resets.forEach((reset) => {
    reset.classList.remove("active-fruit");
    reset.classList.remove("active-veggie");
    reset.classList.remove("active-snack");
  });
  updateFound();
}

function updateFound() {
  const activeItems = document.querySelectorAll(
    ".active-fruit, .active-veggie, .active-snack",
  );

  let found = document.querySelector(".found");

  found.innerText = activeItems.length + " elements are found";

  console.log(activeItems);
}
