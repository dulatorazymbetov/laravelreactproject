import React, { useState, useEffect } from "react";
import { useParams } from "react-router-dom";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';

import Title from '@layouts/title';
import TableBuilder from '@layouts/table';

function ListOfStaff(){
	return (
		<Box>
			<Title content="Сотрудники" />
			<Box mt={4}>
				<TableBuilder 
					url="list_of_staff"
					rows={[
						{
							label: 'Ф.И.О',
							value: row => row.user.lastname + " " + row.user.firstname
						},
						{
							label: 'ИИН',
							value: row => row.user.iin || '-'
						},
						{
							label: 'Занимаемые должности',
							value: ''
						},
						{
							label: 'Редактировать',
							type: 'link',
							action: {
								icon: 'settings',
								variant: 'outlined',
								param: 'id',
								url_prefix: 'list_of_staff',
								label: 'Редактировать'
							}
						}
					]}
				/>
			</Box>
		</Box>
	);
}

export default ListOfStaff;