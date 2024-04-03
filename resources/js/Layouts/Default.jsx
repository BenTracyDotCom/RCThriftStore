import React from "react";

export default function Default({children}) {

  return (
<div>
  <div>This is the header that'll be every damn where</div>
      <main>
        {children}
      </main>
      <div>...and this is the footer, same story</div>
</div>
  )
}