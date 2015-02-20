$("#paster").on "submit", ()->
  if prompt("What is the name of the script? (to see if you’re human)","") in ["hyle", "Hyle"]
    return true;
  else
    alert "Nope";
    return false;
