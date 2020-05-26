import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';

import { useLang } from "@contexts/lang";
import TableBuilder from "@layouts/table";
import FormBuilder from "@layouts/form";

import Dialog from '@material-ui/core/Dialog';

const useStyles = makeStyles(theme => ({
	
}));

function UserList(props) {
	const classes = useStyles();
	const { getL } = useLang();

	const [editItem, setEditItem] = useState(false);
	const [form, setForm] = useState({});
	const [refreshDate, setRefreshDate] = useState(new Date);
	
	useEffect(() => {

    }, []);

	const editSubject = (id) => {
		window.axios.get('users/'+id).then((response) => {
			setForm(response.data.form);
			setEditItem(response.data.items);
		});
	}
	const handleEditSubmit = (data) => {
		window.axios.post('users/'+editItem.id, data)
			.then((response) => {
				setRefreshDate(new Date);
				setEditItem(false);
			});
	}
	return (
		<div>
			<TableBuilder 
				rows={[
					{label: 'Учетная запись', value: 'login'},
					{label: 'ФИО', value: row => row.lastname + " " + row.firstname + " " + row.patronymic},
					{
						label: 'Доступные роли', 
						value: row => row.roles.map(list => <div key={list.id}>{list['description_'+getL]}</div>)
					},
					{
						label: 'Редактирование', 
						type: 'action', 
						action: {
							handle: editSubject,
							icon: 'settings',
							variant: 'outlined',
							param: 'id',
							label: 'Редактировать'
						}
					}
				]}
				url="users"
				refreshDate={refreshDate}
			/>
			<Dialog open={Boolean(editItem)} onClose={() => {setEditItem(false)}} fullWidth maxWidth="md">
				<FormBuilder 
					title="Данные о пользователе"
					handleSubmit={handleEditSubmit}
					fields={[
						{
							label: "Фамилия",
							name: 'lastname',
							value: editItem.lastname
						},
						{
							label: 'Имя',
							name: 'firstname',
							value: editItem.firstname
						},
						{
							label: 'Отчество',
							name: 'patronymic',
							value: editItem.patronymic
						},
						{
							label: 'E-mail',
							name: 'email',
							value: editItem.email
						},
						{
							label: 'ИИН',
							name: 'iin',
							value: editItem.iin
						},
						{
							label: 'Добавленные роли',
							name: 'roles',
							type: 'select',
							value: editItem.roles,
							select: {
								label: 'description_'+getL,
								items: form.roles,
								multiple: true,
								value: 'id'
							}
						}
					]}
				/>
			</Dialog>
		</div>
	);

} 
export default UserList;