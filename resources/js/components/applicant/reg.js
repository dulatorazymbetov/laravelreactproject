import React, { useState, useEffect } from "react";
import { useParams } from "react-router-dom";
import { Link } from "react-router-dom";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Paper from '@material-ui/core/Paper';
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

	const [isLoading, setIsLoading] = useState('loading');
	const [form, setForm] = useState({});
	const [user, setUser] = useState({});

	useEffect(() => {
		getData();
	}, []);

	const getData = () => {
		window.axios.get('registration/'+iin+'/'+hash).then((response) => {
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
				alert("Отмеченны повторяющиеся группы обр программ");
			}
		});
	}
	if(isLoading==='loading'){return (<div>Loading...</div>);}
	if(isLoading==='error'){return (<div>Не верная ссылка</div>);}
	if(isLoading==='done'){return (<div>Данные сохранены</div>);}
	return (
		<Box component={Paper} elevation={3} style={{maxWidth: '900px', margin: '50px auto'}}>
			<FormBuilder 
				title={user.lastname + " " + user.firstname + " " + (user.patronymic || '')}
				subtitle={<Box>
					Уважаемый абитуриент-2020! <br />
					Приемная комиссия МУИТ информирует Вас о том, что необходимо написать заявление на конкурс по присуждению целевого образовательного гранта АО «МУИТ» по прилагаемой форме.
					Просим отправить качественное фото заявления на электронную почту ….. По возникшим вопросам звоните в приемную комиссию или пишите на данную электронную почту.
 					Номера телефонов указаны https://www.iitu.kz/ru/articles/ent-2020/ 
					Это общая рассылка, поэтому если Вы уже предоставили такое заявление в Приемную комиссию МУИТ, просим не отвечать на данное письмо.
 					Добро пожаловать в МУИТ!
				</Box>}
				handleChange={handleChange}
				handleSubmit={handleSubmit}
				fields={[
					{
						type: 'header',
						label: 'Выбор №1'
					},
					{
						type: 'select',
						label: 'Группа обр программ',
						name: 'gop_1',
						select: {
							items: form.gop,
							label: 'title_ru',
							value: 'id',
						}
					},
					{
						type: 'header',
						label: 'Выбор №2'
					},
					{
						type: 'select',
						label: 'Группа обр программ',
						name: 'gop_2',
						select: {
							items: form.gop,
							label: 'title_ru',
							value: 'id',
						}
					},
					{
						type: 'header',
						label: 'Выбор №3'
					},
					{
						type: 'select',
						label: 'Группа обр программ',
						name: 'gop_3',
						select: {
							items: form.gop,
							label: 'title_ru',
							value: 'id',
						}
					},
					{
						type: 'header',
						label: 'Выбор №4'
					},
					{
						type: 'select',
						label: 'Группа обр программ',
						name: 'gop_4',
						select: {
							items: form.gop,
							label: 'title_ru',
							value: 'id'
						}
					},
					{
						type: 'header',
						label: 'Загрузить скан заявления'
					},
					{
						label: 'Загрузить',
						type: 'file',
						name: 'request_file'
					}
				]}
			/>
		</Box>
	);
}

export default ApplicantReg;
