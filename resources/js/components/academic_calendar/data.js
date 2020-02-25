const data = [
	{
		text: 'Зачисление в число студентов',
		date: '19.08.2019 - 24.08.2019',
		category: {
			tag: 'event',
			color: '#018f69'
		},
		link: {
			url: 'https://www.google.com',
			text: ''
		}
	},
	{
		text: '',
		date: '25.08.2019 - 25.08.2019',
		category: {
			tag: '',
			color: ''
		},
		link: {
			url: '',
			text: ''
		}
	},
	{
	text: 'Ориентационная неделя для студентов 1 курса',
	date: '26.08.2019 - 29.08.2019',
	category: {
	tag: 'event',
	color: '#018f69'
	},
	link: {
	url: 'https://florin-pop/blog/2019/03/weekly-coding-challenge/',
	text: ''
	}
	},
	{
	text: 'День конституции',
	date: '30.08.2019 - 30.08.2019',
	category: {
	tag: 'holiday',
	color: '#FFDB14'
	},
	link: {
	url: 'https://twitter.com/florinpop1705',
	text: ''
	}
	},
	{
	text: '',
	date: '31.08.2019 - 31.08.2019',
	category: {
	tag: '',
	color: ''
	},
	link: {
	url: '',
	text: ''
	}
	},
	{
	text: 'День знаний',
	date: '01.09.2019 - 01.09.2019',
	category: {
	tag: 'holiday',
	color: '#FFDB14'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	},
	{
	text: 'Начало осеннего семестра для студентов 1-4 курсов',
	date: '02.09.2019 - 02.09.2019',
	category: {
	tag: 'event',
	color: '#018f69'
	},
	link: {
	url: 'https://medium.com/@popflorin1705',
	text: ''
	}
	},
	{
		text: '',
		date: '03.09.2019 - 13.10.2019',
		category: {
			tag: '',
			color: ''
		},
		link: {
			url: '',
			text: ''
		}
	},
	{
	text: '1-рубежный контроль для студентов 1-4 курсов',
	date: '14.10.2019 - 21.10.2019',
	category: {
	tag: 'mid-term',
	color: '#1DA1F2'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	},
	{
		text: '',
		date: '22.10.2019 - 30.11.2019',
		category: {
			tag: '',
			color: ''
		},
		link: {
			url: '',
			text: ''
		}
	},
	{
	text: 'День Первого Президента',
	date: '01.12.2019 - 01.12.2019',
	category: {
	tag: 'holiday',
	color: '#FFDB14'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	},
	{
		text: '',
		date: '02.12.2019 - 08.12.2019',
		category: {
			tag: '',
			color: ''
		},
		link: {
			url: '',
			text: ''
		}
	},
	{
	text: '2-рубежный контроль для студентов 1-4 курсов',
	date: '09.12.2019 - 14.12.2019',
	category: {
	tag: 'end-term',
	color: '#1DA1F2'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	},
	{
	text: 'Конец теоретического курса осеннего семестра для студентов 1-4 курсов',
	date: '14.12.2019 - 14.12.2019',
	category: {
	tag: 'event',
	color: '#018f69'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	},
	{
		text: '',
		date: '15.12.2019 - 17.12.2019',
		category: {
			tag: '',
			color: ''
		},
		link: {
			url: '',
			text: ''
		}
	},
	{
	text: 'Зимняя экзаменационная сессия для студентов 1-4 курсов',
	date: '18.12.2019 - 31.12.2019',
	category: {
	tag: 'session',
	color: '#e17b77'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	},
	{
	text: 'Зимние каникулы для студентов 1-4 курсов',
	date: '01.01.2020 - 25.01.2020',
	category: {
	tag: 'holiday',
	color: '#FFDB14'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	},
	{
		text: '',
		date: '26.01.2020 - 26.01.2020',
		category: {
			tag: '',
			color: ''
		},
		link: {
			url: '',
			text: ''
		}
	},
	{
	text: 'Начало весеннего семестра для студентов 1-3 курсов',
	date: '27.01.2020 - 27.01.2020',
	category: {
	tag: 'event',
	color: '#018f69'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	},
	{
		text: '',
		date: '28.01.2020 - 07.03.2020',
		category: {
			tag: '',
			color: ''
		},
		link: {
			url: '',
			text: ''
		}
	},
	{
	text: 'Международный Женский день',
	date: '08.03.2020 - 08.03.2020',
	category: {
	tag: 'holiday',
	color: '#FFDB14'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	},
	{
	text: '1-рубежный контроль для студентов 1-3 курсов',
	date: '09.03.2020 - 14.03.2020',
	category: {
	tag: 'mid-term',
	color: '#1DA1F2'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	},
	{
		text: '',
		date: '15.03.2020 - 20.03.2020',
		category: {
			tag: '',
			color: ''
		},
		link: {
			url: '',
			text: ''
		}
	},
	{
	text: 'Праздник Наурыз',
	date: '21.03.2020 - 23.03.2020',
	category: {
	tag: 'holiday',
	color: '#FFDB14'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	},
	{
		text: '',
		date: '24.03.2020 - 26.04.2020',
		category: {
			tag: '',
			color: ''
		},
		link: {
			url: '',
			text: ''
		}
	},
	{
	text: '2-рубежный контроль для студентов 1-3 курсов',
	date: '27.04.2020 - 02.05.2020',
	category: {
	tag: 'end-term',
	color: '#1DA1F2'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	},
	{
		text: '',
		date: '03.05.2020 - 08.05.2020',
		category: {
			tag: '',
			color: ''
		},
		link: {
			url: '',
			text: ''
		}
	},
	{
	text: 'День Победы',
	date: '09.05.2020 - 09.05.2020',
	category: {
	tag: 'holiday',
	color: '#FFDB14'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	},
	{
	text: 'Конец теоритического курса весеннего семестра для студентов 1-3 курсов',
	date: '10.05.2020 - 10.05.2020',
	category: {
	tag: 'event',
	color: '#018f69'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	},
	{
	text: 'Весенняя экзаменнационная сессия для студентов 1-3 курсов',
	date: '11.05.2020 - 31.05.2020',
	category: {
	tag: 'session',
	color: '#e17b77'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	},
	{
	text: 'Учебная практика для студентов 1 курса',
	date: '01.06.2020 - 13.06.2020',
	category: {
	tag: 'practice',
	color: '#1DA1F2'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	},
	{
	text: 'Регистрация студентов 1-3 курсов на элективные курсы',
	date: '01.06.2020 - 13.06.2020',
	category: {
	tag: 'event',
	color: '#018f69'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	},
	{
	text: 'Пересдача экзаменов для студентов 1-3 курсов',
	date: '01.06.2020 - 13.06.2020',
	category: {
	tag: 'event',
	color: '#018f69'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	},
	{
		text: '',
		date: '14.06.2020 - 14.06.2020',
		category: {
			tag: '',
			color: ''
		},
		link: {
			url: '',
			text: ''
		}
	},
	{
	text: 'Летний семестр для студентов 1-3 курсов',
	date: '15.06.2020 - 25.07.2020',
	category: {
	tag: 'event',
	color: '#018f69'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	},
	{
	text: 'Производственная практика для студентов 2-3 курсов',
	date: '08.06.2020 - 11.07.2020',
	category: {
	tag: 'practice',
	color: '#1DA1F2'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	},
	{
	text: 'Летние каникулы для студентов 1-3 курсов',
	date: '15.06.2020 - 31.08.2020',
	category: {
	tag: 'holiday',
	color: '#FFDB14'
	},
	link: {
	url: 'https://google.kz',
	text: ''
	}
	}
   ]
   
   export default data;