function toPurchase() {
    var purchase = document.getElementById("toBuy");
    purchase.innerHTML = `<img src="Icon/doubleTick.png"> Purchased`;

    var outerArea = document.getElementById("child");
    var innerArea = document.createElement("div");
    innerArea.innerHTML =
    `<div class="card mb-3" style="max-width: 100vw; background: #2a4d6d; color: black;">
      <div class="row g-0 parent">
        <div class="col-8 child1">
        <iframe width="100%" height="623" src="https://www.youtube.com/embed/F0hI30ysBV0?list=PLkocNW0BSuEHoRVIiXw0Xm-LhQocUCJwH" title="SnapRevise: The Ultimate A-level Economics Resource" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="col-4 child2">
            <div class="card-body">
            <h3 class="card-title"><strong>Playlist</strong></h3>
            <p class="card-text">
            <li class="fs-5" style="list-style-type: none;">
                <ol>
                    <a href="https://www.youtube.com/watch?v=jFmUg-eMlGM&list=PLKEfWdqgbZjbbsnrOoKwyUN7DQOPvPWvZ&ab_channel=OALevelMathematics" target="_blank">Past Paper Solution: 1</a>
                </ol>
                <ol>
                    <a href="https://www.youtube.com/watch?v=a-yvnoBHVPU&list=PLKEfWdqgbZjbbsnrOoKwyUN7DQOPvPWvZ&index=2&ab_channel=OALevelMathematics" target="_blank">Past Paper Solution: 2</a>
                </ol>
                <ol>
                    <a href="https://www.youtube.com/watch?v=qbsmAKPrGHY&list=PLKEfWdqgbZjbbsnrOoKwyUN7DQOPvPWvZ&index=3&ab_channel=OALevelMathematics" target="_blank">Past Paper Solution: 3</a>
                </ol>
                <ol>
                    <a href="https://www.youtube.com/watch?v=t0rDV23FqQA&list=PLKEfWdqgbZjbbsnrOoKwyUN7DQOPvPWvZ&index=4&ab_channel=OALevelMathematics" target="_blank">Past Paper Solution: 4</a>
                </ol>
                <ol>
                    <a href="https://www.youtube.com/watch?v=SBqJ9_BEh3k&list=PLKEfWdqgbZjbbsnrOoKwyUN7DQOPvPWvZ&index=5&ab_channel=OALevelMathematics" target="_blank">Past Paper Solution: 5</a>
                </ol>
                <ol>
                    <a href="https://www.youtube.com/watch?v=-bV_9w0zaIs&list=PLKEfWdqgbZjbbsnrOoKwyUN7DQOPvPWvZ&index=6&ab_channel=OALevelMathematics" target="_blank">Past Paper Solution: 6</a>
                </ol>
                <ol>
                    <a href="https://www.youtube.com/watch?v=2j2ZpesdpUw&list=PLKEfWdqgbZjbbsnrOoKwyUN7DQOPvPWvZ&index=7&ab_channel=OALevelMathematics" target="_blank">Past Paper Solution: 7</a>
                </ol>
            </li></p>
            </div>
        </div>
      </div>
    </div>`;
    outerArea.appendChild(innerArea);
    purchase.disabled = true;
}