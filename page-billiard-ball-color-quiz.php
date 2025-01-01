      <?php get_header(); ?>
      <div class="quiz-container">
        <h2 class="page-title"><?php the_title(); ?></h2>
        <div class="ball">
          <div class="ball__inner">
            <div class="ball__num">?</div>
          </div>
          <div class="ball__shine"></div>
        </div>
        <div id="display"></div>
        <div id="countdown"></div>
        <div id="guessButtonContainer" class="guess-button-container">
          <!-- <button class="guess-button">1</button>
        <button class="guess-button">4</button>
        <button class="guess-button">6</button>
        <button class="guess-button">3</button> -->
        </div>
        <form id="form" style="display: none">
          <input id="guessInput" type="text" pattern="\d*" autocomplete="off" />
          <button type="submit">Submit Answer</button>
        </form>
        <div id="feedback"></div>
        <button id="startGameButton" class="start-button hidden">
          Start Over
        </button>
      </div>

      <?php get_footer(); ?>