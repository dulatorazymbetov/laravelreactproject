import React, { useState, useEffect } from "react";
import { useParams } from "react-router-dom";
import { Link } from "react-router-dom";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';

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
			setIsLoading(false);
		}).catch((error) => {
			setIsLoading('error');
		})
	}
	const handleChange = (values) => {
		
	}
	const handleSubmit = (data) => {
		window.axios.post('registration/'+iin+'/'+hash, data);
	}
	if(isLoading==='loading'){return (<div>Loading...</div>);}
	if(isLoading==='error'){return (<div>Не верная ссылка</div>);}
	return (
		<div>
			<FormBuilder 
				title={user.lastname + " " + user.firstname + " " + (user.patronymic || '')}
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
						name: 'file'
					}
				]}
			/>
		</div>
	);
}

export default ApplicantReg;
