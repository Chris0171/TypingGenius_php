let counterClear = false;

let settings = {
	level: 1,
};

let interval = null;

let data = [
	"En lo alto de la colina, el viento silbaba entre los árboles desnudos, susurros que se mezclaban con el crujido de la hierba bajo los pies. Abajo, en el valle, el ejército se preparaba para la batalla, una maraña de escudos y lanzas que relucían bajo el sol del mediodía. Lord Aric, montado en su caballo negro como el azabache, observaba con serenidad desde lo alto, su mirada fija en el estandarte enemigo ondeando en la distancia. Sus hombres aguardaban ansiosos, pero el líder no mostraba signos de nerviosismo. La guerra se cernía sobre ellos como una sombra oscura, pero Aric sabía que debía mantenerse firme, pues en su corazón ardía el fuego de la determinación y la esperanza de un mañana mejor.",
	"En la vasta extensión del océano, el sol se hundía lentamente en el horizonte, tiñendo el cielo de tonos dorados y anaranjados. A bordo del barco, la tripulación se afanaba en sus quehaceres diarios, mientras las olas golpeaban rítmicamente contra el casco de madera. El capitán, con la mirada perdida en el horizonte, reflexionaba sobre los peligros que les esperaban en su travesía hacia tierras desconocidas. La brisa salada acariciaba su rostro, trayendo consigo el aroma del mar y el eco de antiguas leyendas de navegantes valientes que se aventuraron más allá de los confines del mundo conocido. En ese momento, el destino se abría ante ellos como un libro lleno de misterios por descubrir y desafíos por superar.",
	"En el corazón del bosque encantado, los rayos del sol se filtraban entre las frondosas ramas, creando un juego de luces y sombras sobre el suelo cubierto de musgo. El susurro del viento entre los árboles parecía susurrar antiguos secretos mientras las criaturas del bosque se movían con sigilo entre los árboles. En medio de este escenario mágico, un grupo de aventureros se adentraba valientemente, con la esperanza de descubrir los tesoros ocultos que se decía custodiaban los espíritus del bosque. Con cada paso, la emoción y la intriga crecían, mientras el misterio del bosque encantado los envolvía en su hechizo. En esta tierra de mitos y leyendas marítimas, el faro era más que un simple faro.",
	"En el corazón del vasto océano, un barco solitario surcaba las aguas turbulentas, sus velas hinchadas por el viento implacable que soplaba desde el horizonte. A bordo, la tripulación se afanaba en sus quehaceres diarios, manejando las cuerdas y ajustando los aparejos con destreza y determinación. El capitán, con la mirada fija en el horizonte, contemplaba el infinito mar con una mezcla de admiración y respeto. Para él, el océano no era solo un vasto y desconocido territorio, sino también un símbolo de libertad y aventura. Cada ola que se estrellaba contra el casco de madera resonaba como una melodía ancestral, recordándole el llamado de la naturaleza y el deseo de explorar lo desconocido. ",
	"En el mercado bullicioso de la ciudad portuaria, el rumor de las voces y el tintineo de monedas llenaban el aire con una atmósfera vibrante y animada. Los vendedores, con sus puestos coloridos y mercancías expuestas, ofrecían sus productos con entusiasmo a los transeúntes que deambulaban por los estrechos callejones. Entre el trajín de la multitud, músicos callejeros tocaban melodías alegres, mientras malabaristas y acróbatas deleitaban a la audiencia con sus habilidades. En este escenario de caos controlado, la vida cotidiana de la ciudad fluía como un río, llevando consigo la energía y la diversidad de sus habitantes.",
	"En el tranquilo valle de Verdeluna, los árboles se mecían suavemente con la brisa matutina, sus hojas susurrando secretos antiguos al viento. Los campos ondulantes de trigo dorado se extendían hasta donde alcanzaba la vista, bañados por la luz suave del amanecer. En el centro del valle se alzaba un pequeño pueblo, con sus casas de adobe y tejados de paja que se agrupaban alrededor de la plaza principal. Allí, los lugareños se reunían cada día para intercambiar noticias y compartir historias junto al pozo comunitario. En las afueras del pueblo, un río serpenteaba perezosamente entre prados verdes, reflejando el resplandor del sol naciente. En este rincón idílico de la campiña, la vida seguía su curso tranquilo y apacible. ",
	"En lo alto de la colina, el antiguo faro se alzaba majestuoso contra el cielo nocturno, su luz intermitente cortando la oscuridad como un guía para los navegantes perdidos en el mar. Desde su posición elevada, ofrecía una vista panorámica del océano extendiéndose hasta el horizonte, donde las estrellas titilaban en la inmensidad del firmamento. Abajo, en el puerto pesquero, los barcos descansaban tranquilos junto al muelle, sus cascos reflejando la luz de la luna que se filtraba entre las nubes. En las calles estrechas y empedradas del pueblo costero, las luces parpadeantes de las tabernas y posadas invitaban a los viajeros a buscar refugio y compañía en la noche.",
	"En el reino distante de Eldoria, la luz del sol se filtraba a través de las altas torres del castillo real, iluminando los jardines exuberantes y los senderos empedrados que serpentean entre los terrenos. Las murallas de piedra resplandecían bajo el resplandor del día, mientras los estandartes ondeaban al viento, mostrando los colores y emblemas de las casas nobles que rivalizaban por el favor del rey. En la sala del trono, el monarca se sentaba en su sitial de oro, rodeado de cortesanos y consejeros que susurraban palabras de consejo y adulación. La corte real bullía de actividad, con comerciantes y embajadores de tierras lejanas buscando audiencia con el soberano. ",
];

const getRandomText = () => {
	const randomIndex = Math.floor(Math.random() * (data.length - 1));
	return data[randomIndex];
};

const getTimeToCount = (level) => {
	switch (level) {
		case 1:
			return 280;
			break;
		case 2:
			return 190;
			break;
		case 3:
			return 145;
			break;
		case 4:
			return 100;
			break;
		case 5:
			return 55;
			break;
	}
};

const setTime = (timeInSeconds, counterElem, modalElem) => {
	const time = document.getElementsByClassName(counterElem)[0];
	let seconds = timeInSeconds % 60;
	let minutes = (timeInSeconds - seconds) / 60;

	let redTimeLimit = false;

	printTime(minutes, seconds, time);

	interval = setInterval(() => {
		// End interval when time is up
		if (minutes == 0 && seconds == 0) {
			counterClear = true;
			document.getElementById(modalElem).click();
			clearInterval(interval);
		} else {
			seconds--;
			timeInSeconds--;
			if (timeInSeconds < 30 && redTimeLimit == false) {
				time.style.color = "red";
				redTimeLimit == true;
			} else {
			}
			if (seconds < 0) {
				seconds = 59;
				minutes--;
			}
			printTime(minutes, seconds, time);
		}
	}, 1000);
};

const printTime = (m, s, text) => {
	if (m < 10) {
		if (s < 10) {
			text.textContent = "0" + m + ":" + "0" + s;
		} else {
			text.textContent = "0" + m + ":" + s;
		}
	} else {
		if (seconds < 10) {
			text.textContent = m + ":" + "0" + s;
		} else {
			text.textContent = m + ":" + s;
		}
	}
};

const saveUser = (name, level, errors, path) => {
	// Realizar la solicitud utilizando Fetch
	fetch(path, {
		method: "POST", // Método de la solicitud
		headers: {
			"Content-Type": "application/json", // Tipo de contenido del cuerpo de la solicitud (en este caso, JSON)
		},
		body: JSON.stringify({
			alias: name,
			level: level,
			nErrors: errors,
		}),
	})
		.then(function (response) {
			// Verificar si la respuesta es exitosa
			if (!response.ok) {
				throw new Error("Error en la solicitud: " + response.status);
			}

			// Devolver la respuesta como JSON
			return response.json();
		})
		.then(function (data) {
			// Trabajar con los datos obtenidos
			console.log("Resultado de la consulta:", data.resultado);
		})
		.catch(function (error) {
			// Manejar errores
			console.error("Error:", error);
		});
};

export {
	data,
	settings,
	counterClear,
	interval,
	setTime,
	getRandomText,
	getTimeToCount,
	printTime,
	insertUser,
};
