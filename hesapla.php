<?php include 'header.php'; ?>

<div class="contentGrid">
	<div id="suraya"></div>
	<div class="calculatorGrid mx-auto my-5 p-5">
		<div class="row mb-3">
			<div class="col-9 ">
				<div class="lcdPanel text-left" id="lcdPanel"></div>
				<div class="text-secondary lcdSonuc" id="lcdSonuc"></div>
			</div>
			<div class="col-3">
				<div class="islemSil">
					<button onclick="sil()">C</button></div>
				</div>
			</div>
			<div class="row">
				<div class="col-7 ">
					<div id="tuslar" class="row islemTusNumber">
						
						<div class="col-4"><button >9</button></div>
						<div class="col-4"><button>8</button></div>
						<div class="col-4"><button>7</button></div>
						<div class="col-4"><button>6</button></div>
						<div class="col-4"><button>5</button></div>
						<div class="col-4"><button>4</button></div>
						<div class="col-4"><button>3</button></div>
						<div class="col-4"><button>2</button></div>
						<div class="col-4"><button>1</button></div>
						<div class="col-8"><button>0</button></div>
						<div class="col-4"><button>.</button></div>
						<div class="col-4"><button>+</button></div>
						<div class="col-4"><button>-</button></div>
					</div>
				</div>
				<div class="col-5 ">
					<div class="row islemTusOperatör">
						<div class="col-6"><button>&</button></div>
						<div class="col-6"><button>&</button></div>
						<div class="col-6"><button>-</button></div>
						<div class="col-6"><button>%</button></div>
						<div class="col-6"><button>x</button></div>
						<div class="col-6"><button>/</button></div>
						<div class="col-6"><button onclick="topla()">+</button></div>
						<div class="col-6"><button>=</button></div>
					</div>
				</div>
			</div>
		</div>


	</div>


	<?php include "footer.php" ?>