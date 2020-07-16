import React, { useState, useEffect } from "react";
import { useParams } from "react-router-dom";
import { Link } from "react-router-dom";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Paper from '@material-ui/core/Paper';
import Button from '@material-ui/core/Button';

import FormBuilder from "@layouts/form";
import { useLang } from "@contexts/lang";

const useStyles = makeStyles({
	item: {
		height: '126vh'
	},
	itemSuccess: {
		height: '135vh'
	},
	fullWidth: {
		minWidth: '240px',
		width: '100%'
	},
});

function ApplicantReg(props) {
	const classes = useStyles();
	const { iin, hash } = useParams();
	const { setW, getW, setL, getL } = useLang();
	
	setW({
		select_gop: {
			ru: 'Выбор',
			kk: 'Таңдау'
		},
		gop: {
			ru: 'Группа обр программ',
			kk: 'Білім беру бағдарламасының тобы'
		},
		upload_request: {
			ru: 'Загрузить скан заявления',
			kk: 'Өтінімді енгізу'
		},
		upload: {
			ru: 'Загрузить',
			kk: 'Енгізу'
		},
		reply_gop: {
			ru: "Выбраны повторяющиеся группы обр программ",
			kk: 'Білім беру бағдарлама тобын бірнеше рет таңдадыңыз'
		},
		send: {
			ru: 'Отправить',
			kk: 'Жіберу'
		}
	});

	const [isLoading, setIsLoading] = useState('loading');
	const [form, setForm] = useState({});
	const [user, setUser] = useState({});

	useEffect(() => {
		getData();
	}, []);

	const getData = () => {
		window.axios.get('registration/'+iin+'/'+hash).then((response) => {
			response.data.form.gop.unshift({id: null, title_ru: 'Не выбрано', title_kk: 'Таңдалмаған'});
			setForm(response.data.form);
			setUser(response.data.user);
			if(response.data.applicant.confirmed){
				setIsLoading('done');
			}
			else {
				setIsLoading(false);
			}
			
		}).catch((error) => {
			setIsLoading('error');
		})
	}
	const handleChange = (values) => {
		
	}
	const handleSubmit = (data) => {
		window.axios.post('registration/'+iin+'/'+hash, data).then((response) => {
			setIsLoading("done");
		}).catch((error) => {
			if(error.response.data==='reply gop'){
				alert(getW('reply_gop'));
			}
		});
	}
	if(isLoading==='loading'){return (<div>Loading...</div>);}
	if(isLoading==='error'){return (<div>Не верная ссылка</div>);}
	if(isLoading==='done'){return (<div>Данные сохранены</div>);}
	return (
		<Box component={Paper} elevation={3} style={{maxWidth: '900px', margin: '20px auto'}}>
			<Box p={3}>
				Тілді таңдаңыз / Выберите язык:  <Button size="small" onClick={() => setL('kk')} variant="contained">Қазақша</Button> <Button size="small" onClick={() => setL('ru')} variant="contained">Русский</Button>
			</Box>
			<FormBuilder 
				title={user.lastname + " " + user.firstname + " " + (user.patronymic || '')}
				subtitle={<Box>
					{getL === 'ru' && <div>
					Уважаемый абитуриент-2020! <br/>
					Приемная комиссия МУИТ информирует Вас о том, что необходимо написать заявление на конкурс по присуждению целевого образовательного гранта АО «МУИТ» по прилагаемой форме. Просим отправить качественное фото или скан заявления по ссылке ниже.<br/> 
					Заявление можно распечатать, либо заполнить вручную. <br/> 
					Так же необходимо заполнить электронную форму ниже и выбрать группы образовательных программ (ГОП) из списка. <br/>
					В общей сложности вы можете выбрать до 4 ГОП. В случае если вы выбрали меньше 4 ГОП нашего университета, вы можете выбрать остальные ГОП через портал электронного правительства (http://egov.kz/) <br/>
					По возникшим вопросам звоните в приемную комиссию или пишите на электронную почту <b>iitu.admission@gmail.com</b>. Номера телефонов указаны на сайте <a href="https://www.iitu.kz/ru/articles/ent-2020/" target="_blank">https://www.iitu.kz/ru/articles/ent-2020</a>  <br/>
					Добро пожаловать в Международный университет информационных технологий!
					</div>}
					{getL === 'kk' && <div>
					Құрметті абитуриент 2020! <br/>
					Халықаралық ақпараттық технологиялар университеті қабылдау комиссиясы «ХАТУ » АҚ білім беру грантын тағайындауға конкурсқа өтінішті берілген нысанда жазу қажеттігін хабарлайды. Өтініш нысаны төменде бекітілген. Жазылған өтінішіңізді жоғары сапалы фотосурет немесе сканерленген түрде сілтеме бойынша жіберуіңізді сұраймыз. <br/>
					Өтінімді басып шығаруға немесе қолмен толтыруға болады.  <br/>
					Сондай-ақ, төменде көрсетілген электронды нысанды толтыру және тізімнен білім беру бағдарламаларының топтарын (БББТ) таңдау қажет. <br/>
					Барлығы 4 БББТ таңдай аласыз. Егер сіз біздің университеттен 4-тен аз БББТ таңдаған болсаңыз, қалған БББТ-ны электронды үкімет порталы (http://egov.kz/) арқылы басқа ЖЖО-нан таңдауға болады. <br/>
					Барлық сұрақтар бойынша қабылдау бөліміне немесе iitu.admission@gmail.com электронды поштасына хабарласыңыз. Телефон нөмірлері <a href="https://www.iitu.kz/ru/articles/ent-2020/" target="_blank">https://www.iitu.kz/ru/articles/ent-2020</a> сайтында көрсетілген. <br/>
					Халықаралық ақпараттық технологиялар университетіне қош келдіңіз! 
					</div>}
				</Box>}
				handleChange={handleChange}
				handleSubmit={handleSubmit}
				submitText={getW('send')}
				fields={[
					{
						type: 'header',
						label: getW('select_gop')+' №1'
					},
					{
						type: 'select',
						label: 'Группа обр программ',
						name: 'gop_1',
						select: {
							items: form.gop,
							label: 'title_'+getL,
							value: 'id',
						}
					},
					{
						type: 'header',
						label: getW('select_gop')+' №2'
					},
					{
						type: 'select',
						label: getW('gop'),
						name: 'gop_2',
						required: false,
						select: {
							items: form.gop,
							label: 'title_'+getL,
							value: 'id',
						}
					},
					{
						type: 'header',
						label: getW('select_gop')+' №3'
					},
					{
						type: 'select',
						label: getW('gop'),
						name: 'gop_3',
						required: false,
						select: {
							items: form.gop,
							label: 'title_'+getL,
							value: 'id',
						}
					},
					{
						type: 'header',
						label: getW('select_gop')+' №4'
					},
					{
						type: 'select',
						label: getW('gop'),
						name: 'gop_4',
						required: false,
						select: {
							items: form.gop,
							label: 'title_'+getL,
							value: 'id'
						}
					},
					{
						type: 'header',
						label: getW('upload_request')
					},
					{
						label: getW('upload'),
						type: 'file',
						name: 'request_file'
					}
				]}
			/>
		</Box>
	);
}

export default ApplicantReg;
